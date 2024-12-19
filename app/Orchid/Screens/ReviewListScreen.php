<?php

    namespace App\Orchid\Screens;

    use App\Models\Review;
    use App\Orchid\Layouts\ReviewListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class ReviewListScreen extends Screen
    {
        public $name = 'Отзывы';

        public function query($id = null): array
        {
            return [
                'reviews' => Review::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.reviews.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                ReviewListLayout::class
            ];
        }
    }
