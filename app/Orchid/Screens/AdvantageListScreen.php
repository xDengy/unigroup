<?php

    namespace App\Orchid\Screens;

    use App\Models\Advantage;
    use App\Orchid\Layouts\AdvantageListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class AdvantageListScreen extends Screen
    {
        public $name = 'Преимущества';

        public function query($id = null): array
        {
            return [
                'advantages' => Advantage::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.advantages.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                AdvantageListLayout::class
            ];
        }
    }
