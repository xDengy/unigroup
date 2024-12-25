<?php

    namespace App\Orchid\Layouts;

    use App\Models\RentSection;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class RentSectionListLayout extends Table
    {
        protected $target = 'rentSections'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (RentSection $el) {
                    return Link::make($el->name)->route('platform.rents.list', [
                        'rentSectionId' => $el->id
                    ]);
                }),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
                TD::make('sort', 'Сортировка')->sort(),
                TD::make('', 'Количество элементов')->render(function (RentSection $el) {
                    return count($el->items);
                }),
            ];
        }
    }
