<?php

    namespace App\Orchid\Screens;

    use App\Models\Page;
    use App\Orchid\Layouts\PageListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class PageListScreen extends Screen
    {
        public $name = 'Страницы';

        public function query($id = null): array
        {
            return [
                'pages' => Page::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.pages.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                PageListLayout::class
            ];
        }
    }
