<?php

    namespace App\Orchid\Screens;

    use App\Models\Director;
    use App\Orchid\Layouts\DirectorListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class DirectorListScreen extends Screen
    {
        public $name = 'Директор';
        public $count = 0;

        public function query(): array
        {
            $directors = Director::paginate();
            $this->count = count($directors);
            return [
                'directors' => $directors
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            if ($this->count == 0) {
                $commandAr[] = Link::make('Добавить элемент')
                    ->icon('plus')
                    ->route('platform.directors.edit');
            }

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                DirectorListLayout::class
            ];
        }
    }
