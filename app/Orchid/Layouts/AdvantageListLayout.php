<?php

    namespace App\Orchid\Layouts;

    use App\Models\Advantage;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class AdvantageListLayout extends Table
    {
        protected $target = 'advantages'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Advantage $el) {
                    return Link::make($el->name)->route('platform.advantages.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
