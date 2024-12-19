<?php

    namespace App\Orchid\Screens;

    use App\Models\Partner;
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

    class PartnerEditScreen extends Screen
    {

        public $name = 'Партнеры';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Partner::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'partner' => $el ?? null
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
                    ->route('platform.partners.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('partner.name')
                            ->title('Название')
                            ->required(),
                        CheckBox::make('partner.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('partner.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                        Input::make('partner.id')
                            ->type('hidden'),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Partner $el, Request $request)
        {
            $requestAr = $request->get('partner');
            if ($requestAr['id']) {
                $el = Partner::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Partner::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.partners.list');
        }

        public function remove($id)
        {
            $el = Partner::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.partners.list');
        }
    }
