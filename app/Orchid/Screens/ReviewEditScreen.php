<?php

    namespace App\Orchid\Screens;

    use App\Models\Review;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Quill;
    use Orchid\Screen\Fields\TextArea;
    use Orchid\Screen\Fields\Upload;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class ReviewEditScreen extends Screen
    {

        public $name = 'Отзывы';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Review::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'review' => $el ?? null
            ];
        }

        public function commandBar(): array
        {
            return [
                Button::make('Создать')
                    ->icon('save-alt')
                    ->method('createOrUpdate'),

                Button::make('Удалить')
                    ->icon('trash')
                    ->method('remove')
                    ->canSee($this->exists),

                Link::make('Назад')
                    ->icon('arrow-left')
                    ->route('platform.reviews.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('review.name')
                            ->title('Название')
                            ->required(),
                        TextArea::make('review.text')
                            ->title('Текст сообщения')
                            ->required(),
                        Input::make('review.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        CheckBox::make('review.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('review.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Review $el, Request $request)
        {
            $requestAr = $request->get('review');
            if ($requestAr['id']) {
                $el = Review::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Review::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.reviews.list');
        }

        public function remove($id)
        {
            $el = Review::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.reviews.list');
        }
    }
