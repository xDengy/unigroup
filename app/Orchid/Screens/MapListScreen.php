<?php

    namespace App\Orchid\Screens;

    use App\Models\Map;
    use App\Orchid\Layouts\MapListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class MapListScreen extends Screen
    {
        public $name = 'Карта';

        public function query($id = null): array
        {
            return [
                'maps' => Map::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.maps.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                MapListLayout::class
            ];
        }
    }
