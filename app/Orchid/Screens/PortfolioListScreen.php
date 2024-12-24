<?php

    namespace App\Orchid\Screens;

    use App\Models\Portfolio;
    use App\Orchid\Layouts\PortfolioListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class PortfolioListScreen extends Screen
    {
        public $name = 'Портфолио';

        public function query($id = null): array
        {
            return [
                'portfolios' => Portfolio::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.portfolios.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                PortfolioListLayout::class
            ];
        }
    }
