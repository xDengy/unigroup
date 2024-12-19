<?php

    namespace App\Orchid\Layouts;

    use App\Models\Partner;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class PartnerListLayout extends Table
    {
        protected $target = 'partners'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Partner $el) {
                    return Link::make($el->name)->route('platform.partners.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Input::make()),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
