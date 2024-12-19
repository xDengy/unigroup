<?php

    namespace App\Orchid\Layouts;

    use App\Models\Menu;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class MenuListLayout extends Table
    {
        protected $target = 'menus'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название страницы')->render(function (Menu $el) {
                    return Link::make($el->name)->route('platform.menus.editItem', $el);
                }),
                TD::make('url', 'Адрес страницы'),
                TD::make('active', 'Активность')->filter(CheckBox::make()),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
