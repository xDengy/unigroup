<?php

    namespace App\Orchid\Screens;

    use App\Models\Advantage;
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

    class AdvantageEditScreen extends Screen
    {

        public $name = 'Преимущества';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Advantage::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'advantage' => $el ?? null
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
                    ->route('platform.advantages.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('advantage.name')
                            ->title('Название')
                            ->required(),
                        TextArea::make('advantage.description')
                            ->title('Описание')
                            ->required(),
                        Input::make('advantage.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        CheckBox::make('advantage.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('advantage.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Advantage $el, Request $request)
        {
            $requestAr = $request->get('advantage');
            if ($requestAr['id']) {
                $el = Advantage::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Advantage::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.advantages.list');
        }

        public function remove($id)
        {
            $el = Advantage::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.advantages.list');
        }
    }
