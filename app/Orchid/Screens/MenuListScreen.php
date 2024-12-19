<?php

    namespace App\Orchid\Screens;

    use App\Models\Menu;
    use App\Orchid\Layouts\MenuListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class MenuListScreen extends Screen
    {
        public $name = 'Меню';

        public function query($id = null): array
        {
            return [
                'menus' => Menu::paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.menus.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                MenuListLayout::class
            ];
        }
    }
