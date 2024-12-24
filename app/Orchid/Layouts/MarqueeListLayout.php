<?php

    namespace App\Orchid\Layouts;

    use App\Models\Marquee;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class MarqueeListLayout extends Table
    {
        protected $target = 'marquees'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Marquee $el) {
                    return Link::make($el->name)->route('platform.marquees.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
