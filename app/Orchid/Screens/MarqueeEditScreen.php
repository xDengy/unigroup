<?php

    namespace App\Orchid\Screens;

    use App\Models\Marquee;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class MarqueeEditScreen extends Screen
    {

        public $name = 'Бегущая строка';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Marquee::find($id);
                $this->exists = $el->exists;
            }
            if ($this->exists) {
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'marquee' => $el ?? null
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
                    ->route('platform.marquees.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('marquee.name')
                            ->title('Название')
                            ->required(),
                        Input::make('marquee.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        CheckBox::make('marquee.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('marquee.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Marquee $el, Request $request)
        {
            $requestAr = $request->get('marquee');
            if ($requestAr['id']) {
                $el = Marquee::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Marquee::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.marquees.list');
        }

        public function remove($id)
        {
            $el = Marquee::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.marquees.list');
        }
    }
