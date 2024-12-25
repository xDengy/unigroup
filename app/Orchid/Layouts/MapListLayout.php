<?php

    namespace App\Orchid\Layouts;

    use App\Models\Map;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class MapListLayout extends Table
    {
        protected $target = 'maps'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('title', 'Название')->render(function (Map $el) {
                    return Link::make($el->title)->route('platform.maps.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
            ];
        }
    }
