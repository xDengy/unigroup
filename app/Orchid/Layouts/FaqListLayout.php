<?php

    namespace App\Orchid\Layouts;

    use App\Models\Faq;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class FaqListLayout extends Table
    {
        protected $target = 'faqs'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Faq $el) {
                    return Link::make($el->name)->route('platform.faqs.editItem', $el);
                }),
                TD::make('active', 'Активность')->filter(Input::make()),
                TD::make('sort', 'Сортировка')->sort(),
            ];
        }
    }
