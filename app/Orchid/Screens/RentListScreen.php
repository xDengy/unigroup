<?php

    namespace App\Orchid\Screens;

    use App\Models\Rent;
    use App\Models\RentSection;
    use App\Orchid\Layouts\RentListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;
    use Illuminate\Http\Request;

    class RentListScreen extends Screen
    {
        public $name = 'Элементы аренды';
        public $rentSection = [];
        public $rentSectionId = 0;

        public function query($rentSectionId = null, Request $request = null): array
        {
            $this->rentSection = RentSection::find($rentSectionId);
            if (!$this->rentSection) {
                abort(404);
            }
            $this->rentSectionId = $rentSectionId;
            return [
                'rents' => Rent::where('rent_sections_id', $rentSectionId)->filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.rents.edit', [
                    'rentSectionId' => $this->rentSection
                ]);

            $commandAr[] = Link::make('Изменить раздел')
                ->icon('plus')
                ->route('platform.rentSections.editItem', $this->rentSection);

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                RentListLayout::class
            ];
        }
    }
