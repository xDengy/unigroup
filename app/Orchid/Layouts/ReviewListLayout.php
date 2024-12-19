<?php

    namespace App\Orchid\Layouts;

    use App\Models\Review;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class ReviewListLayout extends Table
    {
        protected $target = 'reviews'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Review $el) {
                    return Link::make($el->name)->route('platform.reviews.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Input::make()),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
