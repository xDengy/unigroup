<?php

    namespace App\Orchid\Layouts;

    use App\Models\Page;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class PageListLayout extends Table
    {
        protected $target = 'pages'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('id', 'ID')->render(function (Page $el) {
                    return Link::make($el->id)->route('platform.pages.editItem', $el);
                }),
                TD::make('page_name', 'Название страницы'),
                TD::make('page_url', 'Адрес страницы'),
                TD::make('title', 'Заголовок браузера'),
                TD::make('h1', 'Заголовок страницы'),
                TD::make('code', 'Код'),
            ];
        }
    }
