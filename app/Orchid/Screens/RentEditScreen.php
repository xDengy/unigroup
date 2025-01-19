<?php

    namespace App\Orchid\Screens;

    use App\Models\Rent;
    use App\Models\RentSection;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Picture;
    use Orchid\Screen\Fields\Quill;
    use Orchid\Screen\Fields\TextArea;
    use Orchid\Screen\Fields\Upload;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class RentEditScreen extends Screen
    {

        public $name = 'Элементы аренды';
        public $exists = false;
        public $parent = null;
        public $rentSection = null;

        public function query($rentSectionId, $id = null): array
        {
            $this->rentSectionId = $rentSectionId;
            $this->rentSection = RentSection::find($rentSectionId);
            if (!$this->rentSection) {
                abort(404);
            }

            if ( intval($id) > 0) {
                $el = Rent::find($id);
                if (!empty($el)) {
                    $this->exists = $el->exists;
                } else {
                    abort(404);
                }
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'rent' => $el ?? null
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
                    ->route('platform.rents.list', [
                        'rentSectionId' => $this->rentSectionId
                    ])
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('rent.name')
                            ->title('Название')
                            ->required(),
                        Input::make('rent.price')
                            ->title('Цена')
                            ->required(),
                        CheckBox::make('rent.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('rent.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                        Input::make('rent.id')
                            ->type('hidden'),
                        Input::make('rent.rent_sections_id')
                            ->value($this->rentSectionId)
                            ->type('hidden'),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Rent $el, Request $request)
        {
            $requestAr = $request->get('rent');
            if ($requestAr['id']) {
                $el = Rent::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Rent::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.rents.list', [
                'rentSectionId' => $requestAr['rent_sections_id']
            ]);
        }

        public function remove($id)
        {
            $el = Rent::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.rents.list', [
                'rentSectionId' => $el['rent_sections_id']
            ]);
        }
    }
