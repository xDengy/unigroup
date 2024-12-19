<?php

    namespace App\Orchid\Screens;

    use App\Models\Setting;
    use App\Orchid\Layouts\SettingListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class SettingListScreen extends Screen
    {
        public $name = 'Настройки';
        public $count = 0;

        public function query(): array
        {
            $settings = Setting::paginate();
            $this->count = count($settings);
            return [
                'settings' => $settings
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            if ($this->count == 0) {
                $commandAr[] = Link::make('Добавить элемент')
                    ->icon('plus')
                    ->route('platform.settings.edit');
            }

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                SettingListLayout::class
            ];
        }
    }
