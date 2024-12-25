<?php

    namespace App\Orchid\Layouts;

    use App\Models\Rent;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class RentListLayout extends Table
    {
        protected $target = 'rents'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Rent $el) {
                    return Link::make($el->name)->route('platform.rents.editItem', [
                        'id' => $el->id,
                        'rentSectionId' => $el->rent_sections_id,
                    ]);
                }),
                TD::make('price', 'Цена')->sort(),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
