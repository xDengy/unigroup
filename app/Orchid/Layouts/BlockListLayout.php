<?php

    namespace App\Orchid\Layouts;

    use App\Models\Block;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Layouts\Table;
    use Orchid\Screen\TD;

    class BlockListLayout extends Table
    {
        protected $target = 'blocks'; // таблица
        protected function columns(): array
        {
            return [
                TD::make('name', 'Название')->render(function (Block $el) {
                    return Link::make($el->name)->route('platform.blocks.editItem', $el);
                }),
                TD::make('code', 'Код')->filter(Input::make()),
                TD::make('active', 'Активность')->filter(Select::make()->options([
                    'Нет',
                    'Да'
                ])),
            ];
        }
    }
