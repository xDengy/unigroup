<?php

    namespace App\Orchid\Screens;

    use App\Models\Faq;
    use App\Orchid\Layouts\FaqListLayout;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;

    class FaqListScreen extends Screen
    {
        public $name = 'FAQ';

        public function query($id = null): array
        {
            return [
                'faqs' => Faq::filters()->defaultSort('id', 'desc')->paginate()
            ];
        }

        public function commandBar(): array
        {
            $commandAr = [];
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.faqs.edit');

            return $commandAr;
        }

        public function layout(): array
        {
            return [
                FaqListLayout::class
            ];
        }
    }
