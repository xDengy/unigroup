<?php

    namespace App\Orchid\Screens;

    use App\Models\RentSection;
    use App\Orchid\Layouts\RentSectionListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class RentSectionListScreen extends Screen
    {
        public $name = 'Разделы аренды';

        public function query($id = null): array
        {
            return [
                'rentSections' => RentSection::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить раздел')
                ->icon('plus')
                ->route('platform.rentSections.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                RentSectionListLayout::class
            ];
        }
    }
