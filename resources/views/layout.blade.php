<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            {{$page['title']}}
        </title>
        <meta name="description" content="{{$page['description']}}">
        <meta name="keywords" content="{{$page['keywords']}}">
        <link rel="stylesheet" href="{{asset('css/global.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
        <script src="https://api-maps.yandex.ru/v3/?apikey=dc7c17a8-bf94-4133-a37c-72f2b0d0240b&lang=ru_RU"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="page-{{$page['code']}}">
        <header>
            <div class="container">
                <a href="/" class="logo">
                    <img src="{{$settings['logo']}}" alt="">
                </a>
                <nav class="menu">
                    @foreach($menus as $menu)
                        <li>
                            <a href="{{$menu['url']}}">
                                {{$menu['name']}}
                            </a>
                        </li>
                    @endforeach
                </nav>
                <div class="socials">
                    <div class="social">
                        <a href="{{$settings['vk']}}">
                            <img src="{{asset('imgs/vk.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="social">
                        <a href="{{$settings['whatsapp']}}">
                            <img src="{{asset('imgs/whatsapp.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="social phone">
                        <a href="tel:{{$settings['phone']}}">
                            {{$settings['phone']}}
                        </a>
                    </div>
                </div>
                <div class="burger">
                    <img src="{{asset('imgs/burger.svg')}}" alt="" class="burger-open">
                    <img src="{{asset('imgs/burgerClose.svg')}}" alt="" class="burger-close">
                </div>
            </div>
        </header>
        <div class="mobile">
            <div class="container">
                <nav class="mobile-menu">
                    @foreach($menus as $menu)
                        <li>
                            <a href="{{$menu['url']}}">
                                {{$menu['name']}}
                            </a>
                        </li>
                    @endforeach
                </nav>
                <div class="mobile-socials">
                    <div class="social phone">
                        <a href="tel:{{$settings['phone']}}">
                            {{$settings['phone']}}
                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:{{$settings['email']}}">
                            {{$settings['email']}}
                        </a>
                    </div>
                    <div class="social-wrapper">
                        <div class="social">
                            <a href="{{$settings['vk']}}">
                                <img src="{{asset('imgs/vk.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="social">
                            <a href="{{$settings['whatsapp']}}">
                                <img src="{{asset('imgs/whatsapp.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-image">
                <img src="{{asset('imgs/mobileImage.png')}}" alt="">
            </div>
        </div>
        @yield('body')
        <section class="quote">
            <div class="quote-text">
                {{$settings['quote']}}
            </div>
            <div class="quote-image">
                <img src="{{$settings['quotePicture']}}" alt="">
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="logo-wrapper">
                    <div class="logo">
                        <img src="{{$settings['logoFooter']}}" alt="">
                    </div>
                </div>
                <nav class="footer-menu">
                    @foreach($menus as $menu)
                        <li>
                            <a href="{{$menu['url']}}">
                                {{$menu['name']}}
                            </a>
                        </li>
                    @endforeach
                </nav>
                <div class="socials">
                    <div class="social">
                        <a href="{{$settings['vk']}}">
                            <img src="{{asset('imgs/vkWhite.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="social">
                        <a href="{{$settings['whatsapp']}}">
                            <img src="{{asset('imgs/whatsappWhite.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="social phone">
                        <a href="tel:{{$settings['phone']}}">
                            {{$settings['phone']}}
                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:{{$settings['email']}}">
                            {{$settings['email']}}
                        </a>
                    </div>
                </div>
                <div class="copyright">
                    ООО «Универсал-Групп» {{date('Y')}}. Все права защищены
                </div>
            </div>
            <div class="footer-strokes">
                <img src="{{asset('imgs/footerStrokes.svg')}}" alt="">
            </div>
        </footer>
        @yield('scripts')
    </body>
</html>
