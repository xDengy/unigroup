<?php

    namespace App\Orchid\Layouts;

    use App\Models\Portfolio;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class PortfolioListLayout extends Table
    {
        protected $target = 'portfolios'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Portfolio $el) {
                    return Link::make($el->name)->route('platform.portfolios.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
