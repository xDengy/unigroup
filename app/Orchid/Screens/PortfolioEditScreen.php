<?php

    namespace App\Orchid\Screens;

    use App\Models\Portfolio;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Picture;
    use Orchid\Screen\Fields\Quill;
    use Orchid\Screen\Fields\Select;
    use Orchid\Screen\Fields\Upload;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class PortfolioEditScreen extends Screen
    {

        public $name = 'Портфолио';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Portfolio::find($id);
                $this->exists = $el->exists;
            }
            if($this->exists){
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            if (!is_null($el->chars) && $el->chars !== '') {
                $el->chars = unserialize($el->chars);
            } else {
                $el->chars = [];
            }
            if (!is_null($el->additional_text) && $el->additional_text !== '') {
                $el->additional_text = unserialize($el->additional_text);
            } else {
                $el->additional_text = [];
            }
            return [
                'portfolio' => $el ?? null
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
                    ->route('platform.portfolios.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('portfolio.name')
                            ->title('Название')
                            ->required(),
                        CheckBox::make('portfolio.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('portfolio.sort')
                            ->title('Сортировка')
                            ->type('number')
                            ->required(),
                        Input::make('portfolio.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Quill::make('portfolio.text')
                            ->title('Текст'),
                    ]),
                ]),
                Layout::view('fields.portfolio_additional_text'),
                Layout::rows([
                    Group::make([
                        Select::make('portfolio.type')
                            ->value('default')
                            ->options([
                                'default' => 'Стандартный',
                                'reverse' => 'Стандартный зеркальный',
                                'simple' => 'Простой',
                                'additional' => 'С доп. текстом',
                            ])
                            ->title('Тип'),
                    ]),
                ]),
                Layout::view('fields.portfolio_chars'),
                Layout::rows([
                    Group::make([
                        Upload::make('portfolio.attachment')
                            ->title('Фотографии')
                            ->groups('portfolios')
                            ->acceptedFiles('image/*'),
                        Picture::make('portfolio.preview')
                            ->title('Картинка анонса')
                            ->required()
                            ->acceptedFiles('image/*'),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Portfolio $el, Request $request)
        {
            $requestAr = $request->get('portfolio');
            $requestAr['chars'] = array_filter($requestAr['chars']);
            if (!empty($requestAr['chars'])) {
                $requestAr['chars'] = serialize($requestAr['chars']);
            }
            $requestAr['additional_text'] = array_filter($requestAr['additional_text']);
            if (!empty($requestAr['additional_text'])) {
                $requestAr['additional_text'] = serialize($requestAr['additional_text']);
            }
            if ($requestAr['id']) {
                $el = Portfolio::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                $el = Portfolio::create($requestAr);
            }

            $el->attachment()->syncWithoutDetaching(
                $request->input('portfolio.attachment', [])
            );

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.portfolios.list');
        }

        public function remove($id)
        {
            $el = Portfolio::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.portfolios.list');
        }
    }
