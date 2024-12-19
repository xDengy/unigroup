<?php

    namespace App\Orchid\Screens;

    use App\Models\Marquee;
    use App\Orchid\Layouts\MarqueeListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class MarqueeListScreen extends Screen
    {
        public $name = 'Бегущая строка';

        public function query($id = null): array
        {
            return [
                'marquees' => Marquee::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.marquees.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                MarqueeListLayout::class
            ];
        }
    }
