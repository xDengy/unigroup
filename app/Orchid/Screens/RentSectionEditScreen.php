<?php

    namespace App\Orchid\Screens;

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

    class RentSectionEditScreen extends Screen
    {

        public $name = 'Преимущества';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = RentSection::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'rentSection' => $el ?? null
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
                    ->route('platform.rentSections.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('rentSection.name')
                            ->title('Название')
                            ->required(),
                        CheckBox::make('rentSection.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('rentSection.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                        Input::make('rentSection.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Picture::make('rentSection.image')
                            ->title('Фото')
                            ->acceptedFiles('image/*')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(RentSection $el, Request $request)
        {
            $requestAr = $request->get('rentSection');
            if ($requestAr['id']) {
                $el = RentSection::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                RentSection::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.rentSections.list');
        }

        public function remove($id)
        {
            $el = RentSection::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.rentSections.list');
        }
    }
