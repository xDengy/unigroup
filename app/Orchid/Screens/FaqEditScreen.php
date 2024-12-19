<?php

    namespace App\Orchid\Screens;

    use App\Models\Faq;
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

    class FaqEditScreen extends Screen
    {

        public $name = 'FAQ';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Faq::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'faq' => $el ?? null
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
                    ->route('platform.faqs.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('faq.name')
                            ->title('Название')
                            ->required(),
                        TextArea::make('faq.text')
                            ->title('Текст сообщения')
                            ->required(),
                        Input::make('faq.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        CheckBox::make('faq.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('faq.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Faq $el, Request $request)
        {
            $requestAr = $request->get('faq');
            if ($requestAr['id']) {
                $el = Faq::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Faq::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.faqs.list');
        }

        public function remove($id)
        {
            $el = Faq::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.faqs.list');
        }
    }
