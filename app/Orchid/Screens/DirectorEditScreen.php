<?php

    namespace App\Orchid\Screens;

    use App\Models\Director;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Picture;
    use Orchid\Screen\Fields\Quill;
    use Orchid\Screen\Fields\TextArea;
    use Orchid\Screen\Fields\Upload;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class DirectorEditScreen extends Screen
    {

        public $name = 'Директор';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Director::find($id);
                $this->exists = $el->exists;
            }
            if($this->exists){
                $this->name = 'Изменить';
            } else {
                $this->name = 'Создать';
            }
            return [
                'director' => $el ?? null
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
                    ->route('platform.directors.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('director.name')
                            ->title('ФИО')
                            ->required(),
                        Input::make('director.post')
                            ->title('Должность')
                            ->required(),
                        Input::make('director.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Quill::make('director.text')
                            ->title('Описание')
                            ->required(),
                        Quill::make('director.quote')
                            ->title('Цитата')
                            ->required(),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Picture::make('director.picture')
                            ->title('Фото')
                            ->acceptedFiles('image/*')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Director $el, Request $request)
        {
            $requestAr = $request->get('director');
            if ($requestAr['id']) {
                $el = Director::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Director::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.directors.list');
        }

        public function remove($id)
        {
            $el = Director::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.directors.list');
        }
    }
