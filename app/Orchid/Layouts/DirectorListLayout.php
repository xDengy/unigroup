<?php

    namespace App\Orchid\Layouts;

    use App\Models\Director;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class DirectorListLayout extends Table
    {
        protected $target = 'directors'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('id', 'ID')->render(function (Director $el) {
                    return Link::make('Изменить директора')->route('platform.directors.editItem', $el);
                }),
            ];
        }
    }
