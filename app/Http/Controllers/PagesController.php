<?php

    namespace App\Http\Controllers;

    use App\Models\Advantage;
    use App\Models\Block;
    use App\Models\Director;
    use App\Models\Faq;
    use App\Models\Marquee;
    use App\Models\Menu;
    use App\Models\Page;
    use App\Models\Partner;
    use App\Models\Review;
    use App\Models\Setting;
    use Illuminate\Http\Request;

    class PagesController extends Controller
    {
        public array $data = [];

        public function __construct()
        {
            $this->data['settings'] = Setting::first();
            $this->data['menus'] = Menu::all();

            $blocks = Block::where('active', 1)->get();
            foreach ($blocks as $block) {
                if (!$block->second_name) {
                    $block->second_name = $block->name;
                }
                $this->data['blocks'][$block->code] = [
                    'name' => $block->name,
                    'second_name' => $block->second_name,
                    'text' => $block->text,
                    'additional_text' => $block->additional_text,
                    'link_text' => $block->link_text,
                    'link' => $block->link,
                    'attachment' => $block->attachment()->get()->toArray(),
                ];
            }
        }

        public function main()
        {
            $this->data['page'] = Page::where('page_url', route('main', [], false))->first();
            $this->data['advantages'] = Advantage::where('active', 1)->orderBy('sort', 'asc')->get();
            $this->data['reviews'] = Review::where('active', 1)->orderBy('sort', 'asc')->get();
            $this->data['partners'] = Partner::where('active', 1)->orderBy('sort', 'asc')->get();
            $this->data['marquees'] = Marquee::where('active', 1)->orderBy('sort', 'asc')->get();
            return view('welcome', $this->data);
        }

        public function about()
        {
            $this->data['page'] = Page::where('page_url', route('about', [], false))->first();
            $this->data['partners'] = Partner::where('active', 1)->orderBy('sort', 'asc')->get();
            $this->data['faq'] = Faq::where('active', 1)->orderBy('sort', 'asc')->get();
            $this->data['director'] = Director::first();
            return view('about', $this->data);
        }
    }
