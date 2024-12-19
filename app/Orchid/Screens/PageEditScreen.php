<?php

    namespace App\Orchid\Screens;

    use App\Models\Page;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class PageEditScreen extends Screen
    {

        public $name = 'Страница';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Page::find($id);
                $this->exists = $el->exists;
            }
            if($this->exists){
                $this->name = $el->page_name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'page' => $el ?? null
            ];
        }

        public function commandBar(): array
        {
            return [
                Button::make('Создать')
                    ->icon('save-alt')
                    ->method('createOrUpdate'),

                Button::make('Удалить')
                    ->icon('trash')
                    ->method('remove')
                    ->canSee($this->exists),

                Link::make('Назад')
                    ->icon('arrow-left')
                    ->route('platform.pages.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('page.page_name')
                            ->title('Название страницы')
                            ->required(),
                        Input::make('page.page_url')
                            ->title('Адрес страницы')
                            ->required(),
                        Input::make('page.code')
                            ->title('Код')
                            ->required(),
                        Input::make('page.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Input::make('page.title')
                            ->title('Заголовок браузера')
                            ->required(),
                        Input::make('page.h1')
                            ->title('Заголовок страницы')
                            ->required(),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Input::make('page.description')
                            ->title('Описание браузера')
                            ->required(),
                        Input::make('page.keywords')
                            ->title('Ключевые слова'),
                    ]),
                ])
            ];
        }

        public function createOrUpdate(Page $el, Request $request)
        {
            $requestAr = $request->get('page');
            if ($requestAr['id']) {
                $el = Page::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                Page::create($requestAr);
            }

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.pages.list');
        }

        public function remove($id)
        {
            $el = Page::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.pages.list');
        }
    }
