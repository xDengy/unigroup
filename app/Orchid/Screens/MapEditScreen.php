<?php

    namespace App\Orchid\Screens;

    use App\Models\Map;
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

    class MapEditScreen extends Screen
    {

        public $name = 'Карта';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Map::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->title;
            } else {
                $this->name = 'Создать';
            }
            return [
                'map' => $el ?? null
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
                    ->route('platform.maps.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('map.title')
                            ->title('Название')
                            ->required(),
                        Input::make('map.subtitle')
                            ->title('Описание'),
                        CheckBox::make('map.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('map.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Input::make('map.coorX')
                            ->title('Координаты X')
                            ->required(),
                        Input::make('map.coorY')
                            ->title('Координаты Y')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Map $el, Request $request)
        {
            $requestAr = $request->get('map');
            if ($requestAr['id']) {
                $el = Map::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Map::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.maps.list');
        }

        public function remove($id)
        {
            $el = Map::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.maps.list');
        }
    }
