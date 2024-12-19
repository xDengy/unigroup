<?php

    namespace App\Orchid\Screens;

    use App\Models\Block;
    use App\Orchid\Layouts\BlockListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class BlockListScreen extends Screen
    {
        public $name = 'Блоки';

        public function query($id = null): array
        {
            return [
                'blocks' => Block::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.blocks.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                BlockListLayout::class
            ];
        }
    }
