<?php

    namespace App\Orchid\Screens;

    use App\Models\Setting;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Picture;
    use Orchid\Screen\Fields\TextArea;
    use Orchid\Screen\Fields\Upload;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class SettingEditScreen extends Screen
    {

        public $name = 'Настройки';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Setting::find($id);
                $this->exists = $el->exists;
            }
            if($this->exists){
                $this->name = 'Изменить настройки';
            } else {
                $this->name = 'Создать';
            }
            return [
                'setting' => $el ?? null
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
                    ->route('platform.settings.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('setting.phone')
                            ->title('Телефон')
                            ->required(),
                        Input::make('setting.email')
                            ->title('Почта')
                            ->required(),
                        Input::make('setting.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Input::make('setting.vk')
                            ->title('VK')
                            ->required(),
                        Input::make('setting.whatsapp')
                            ->title('WhatsApp')
                            ->required(),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        TextArea::make('setting.quote')
                            ->title('Цитата')
                            ->required(),
                        Picture::make('setting.quotePicture')
                            ->title('Картинка цитаты')
                            ->acceptedFiles('image/*')
                            ->required(),
                        Picture::make('setting.mobileMenuImage')
                            ->title('Картинка в мобильном меню')
                            ->acceptedFiles('image/*')
                            ->required(),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Picture::make('setting.logo')
                            ->title('Лого')
                            ->acceptedFiles('image/*')
                            ->required(),
                        Picture::make('setting.logoFooter')
                            ->title('Лого в подвале')
                            ->acceptedFiles('image/*')
                            ->required(),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Setting $el, Request $request)
        {
            $requestAr = $request->get('setting');
            if ($requestAr['id']) {
                $el = Setting::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Setting::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.settings.list');
        }

        public function remove($id)
        {
            $el = Setting::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.settings.list');
        }
    }
