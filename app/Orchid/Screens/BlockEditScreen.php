<?php

    namespace App\Orchid\Screens;

    use App\Models\Block;
    use Illuminate\Http\Request;
    use Orchid\Screen\Actions\Button;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Fields\CheckBox;
    use Orchid\Screen\Fields\Group;
    use Orchid\Screen\Fields\Input;
    use Orchid\Screen\Fields\Quill;
    use Orchid\Screen\Fields\Upload;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Alert;
    use Orchid\Support\Facades\Layout;

    class BlockEditScreen extends Screen
    {

        public $name = 'Блоки';
        public $exists = false;
        public $parent = null;

        public function query($id = null): array
        {
            if ($id) {
                $el = Block::find($id);
                $this->exists = $el->exists;
            }
            if($this->exists){
                $this->name = $el->name;
            } else {
                $this->name = 'Создать';
            }
            return [
                'block' => $el ?? null
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
                    ->route('platform.blocks.list')
            ];
        }

        public function layout(): array
        {
            return [
                Layout::rows([
                    Group::make([
                        Input::make('block.name')
                            ->title('Название')
                            ->required(),
                        Input::make('block.second_name')
                            ->title('Второе название'),
                        Input::make('block.code')
                            ->title('Код')
                            ->required(),
                        CheckBox::make('block.active')
                            ->title('Активность')
                            ->sendTrueOrFalse(),
                        Input::make('block.id')
                            ->type('hidden'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Quill::make('block.text')
                            ->title('Текст'),
                        Quill::make('block.additional_text')
                            ->title('Доп. текст'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Input::make('block.link_text')
                            ->title('Текст ссылки'),
                        Input::make('block.link')
                            ->title('Ссылка'),
                    ]),
                ]),
                Layout::rows([
                    Group::make([
                        Upload::make('block.attachment')
                            ->title('Фотографии')
                            ->groups('blocks')
                            ->acceptedFiles('image/*, video/*'),
                    ]),
                ]),
            ];
        }

        public function createOrUpdate(Block $el, Request $request)
        {
            $requestAr = $request->get('block');
            if ($requestAr['id']) {
                $el = Block::find($requestAr['id']);
                $el->update($requestAr);
            } else {
                $el = Block::create($requestAr);
            }

            $el->attachment()->syncWithoutDetaching(
                $request->input('block.attachment', [])
            );

            Alert::info('You have successfully created / updated.');
            return redirect()->route('platform.blocks.list');
        }

        public function remove($id)
        {
            $el = Block::find($id);
            $el->delete();
            Alert::info('You have successfully deleted.');
            return redirect()->route('platform.blocks.list');
        }
    }
