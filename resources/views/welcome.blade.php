@extends('layout')
@section('title')
    {{$page['title']}}
@endsection
@section('description')
    {{$page['description']}}
@endsection
@section('keywords')
    {{$page['keywords']}}
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('body')
    <section class="banner">
        <div class="container">
            <div class="banner-wrapper">
                @php
                    $pageTitle = str_replace('-', '<span class="slash"></span>', $page['h1'])
                @endphp
                <h1>
                    @php echo $pageTitle; @endphp
                </h1>
            </div>
        </div>
        <div class="banner-textarea container">
            <div class="banner-text">
                @php echo html_entity_decode($blocks['banner']['text']); @endphp
            </div>
            <div class="banner-image">
                <img src="{{$blocks['banner']['attachment'][0]['url']}}" alt="">
                <div class="banner-square"></div>
            </div>
            <a href="{{$blocks['banner']['link']}}" class="banner-button">
                {{$blocks['banner']['link_text']}}
            </a>
        </div>
        <div class="banner-strokes">
            <img src="{{asset('imgs/bannerStrokes.svg')}}" alt="">
        </div>
    </section>
    @if(count($advantages) > 0)
        <section class="trophies">
            <div class="container">
                <div class="trophies-wrapper">
                    @foreach($advantages as $advantage)
                        <div class="trophy">
                            <div class="trophy-big">
                                {{$advantage['name']}}
                            </div>
                            <div class="trophy-small">
                                {{$advantage['description']}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="projects">
        <div class="container">
            <div class="projects-wrapper">
                <div class="projects-wrapper-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background">{{$blocks['projects']['second_name']}}</h2>
                        <h2 class="ladder-title">{{$blocks['projects']['name']}}</h2>
                    </div>
                    <a href="{{$blocks['projects']['link']}}" class="more-button">
                        {{$blocks['projects']['link_text']}} <img src="{{asset('imgs/arrow.svg')}}" alt="">
                    </a>
                </div>
                <div class="projects-wrapper-bottom">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{asset('imgs/project.png')}}" alt="">
                        </div>
                        <div class="project-name">
                            Жилые комплексы
                        </div>
                        <div class="project-description">
                            Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.
                        </div>
                        <div class="project-delimiter"></div>
                        <a href="" class="project-detail">
                            <img src="{{asset('imgs/projectDetail.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if( count($marquees) > 0 )
        <section class="marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    @foreach($marquees as $marquee)
                        <div class="marquee-text">{{$marquee['name']}}</div>
                    @endforeach
                </div>

                <div aria-hidden="true" class="marquee-line">
                    @foreach($marquees as $marquee)
                        <div class="marquee-text">{{$marquee['name']}}</div>
                    @endforeach
                </div>
            </div>
        </section>
   @endif
    <section class="rent">
        <div class="container">
            <div class="rent-top">
                <div class="ladder">
                    <h2 class="ladder-title-background">{{$blocks['rent']['second_name']}}</h2>
                    <h2 class="ladder-title">{{$blocks['rent']['name']}}</h2>
                </div>
                <a href="{{$blocks['projects']['link']}}" class="more-button">
                    {{$blocks['projects']['link_text']}} <img src="{{asset('imgs/arrow.svg')}}" alt="">
                </a>
            </div>
            <div class="rent-bottom">
                <div class="rent-text">
                    @php echo html_entity_decode($blocks['rent']['text']) @endphp
                </div>
            </div>
        </div>
        @if (count($blocks['rent']['attachment']) > 0)
            <div class="rent-image-wrapper">
                <div class="rent-image-border"></div>
                <div class="container">
                    <div class="rent-image">
                        <img src="{{$blocks['rent']['attachment'][0]['url']}}" alt="">
                    </div>
                </div>
            </div>
        @endif
    </section>
    @if( count($blocks['gallery-1']['attachment']) > 0 )
        @php
            $first = array_shift($blocks['gallery-1']['attachment']);
            $seconds = array_chunk($blocks['gallery-1']['attachment'], 2);
        @endphp
        <section class="gallery">
            <div class="gallery-col">
                <div class="gallery-image">
                    <img src="{{$first['url']}}" alt="">
                </div>
            </div>
            <div class="gallery-col">
                @php
                    $class = [];
                    if (count($seconds) == 1) {
                        $class[0] = 'h-50';
                        $class[1] = 'h-50';
                    } else {
                        $class[0] = 'h-33';
                        $class[1] = 'h-66 w-50';
                    }
                @endphp
                @foreach( $seconds[0] as $index => $second )
                    <div class="gallery-image {{$class[$index]}}">
                        <img src="{{$second['url']}}" alt="">
                    </div>
                @endforeach
                @if ( count($seconds) > 1 )
                    @php
                        $class = '';
                        if (count($seconds[1]) > 1) {
                            $class = 'h-50';
                        }
                    @endphp
                    <div class="gallery-col h-66">
                        @foreach( $seconds[1] as $second )
                            <div class="gallery-image {{$class}}">
                                <img src="{{$second['url']}}" alt="">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
    <section class="map">
        <div class="container">
            <div class="map-text">
                @php echo html_entity_decode($blocks['map']['text']) @endphp
            </div>
        </div>
        @if (count($blocks['map']['attachment']) > 0)
            <div class="map-image">
                <img src="{{$blocks['map']['attachment'][0]['url']}}" alt="">
            </div>
        @endif
        <div class="container">
            <div class="map-title">
                {{$blocks['map']['name']}}
            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            @if (count($blocks['form']['attachment']) > 0)
                <div class="form-image">
                    <img src="{{$blocks['form']['attachment'][0]['url']}}" alt="">
                </div>
            @endif
            <form method="post" action="" class="form-form">
                @csrf
                <div class="form-title">
                    {{$blocks['form']['name']}}
                </div>
                <div class="form-description">
                    @php echo html_entity_decode($blocks['form']['text']) @endphp
                </div>
                <div class="form-fields">
                    <div class="field">
                        <input type="text" name="NAME" placeholder="Ваше имя">
                    </div>
                    <div class="field">
                        <input type="tel" name="PHONE" placeholder="+7....">
                    </div>
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" value="{{$blocks['form']['link_text']}}">
                </div>
            </form>
        </div>
    </section>
    @if (count($partners) > 0)
        <section class="partners">
            <div class="container">
                <div class="partners-wrapper">
                    @foreach($partners as $index => $partner)
                        <div class="partner">{{$partner['name']}}</div>
                        @if($index = count($partners) - 1)
                            <div class="delimiter"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if( count($blocks['gallery-2']['attachment']) > 0 )
        @php
            $gallery = array_chunk($blocks['gallery-2']['attachment'], 2);
        @endphp
        <section class="gallery-2">
            <div class="gallery-2-wrapper">
                @php
                    $class = [
                        [
                            'gallery-2-row-2',
                            'gallery-2-row-2'
                        ],
                        [
                            'gallery-2-row-3',
                            'gallery-2-row-1'
                        ],
                        [
                            'gallery-2-row-1',
                            'gallery-2-row-3'
                        ],
                    ];
                @endphp
                @foreach($gallery as $index => $gal)
                    <div class="gallery-2-col">
                        @foreach($gal as $i => $pic)
                            <div class="gallery-2-row {{$class[$index][$i]}}">
                                <img src="{{$pic['url']}}" alt="">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    @if (count($reviews) > 0)
        <section class="reviews">
            <div class="container">
                <div class="review-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background">{{$blocks['reviews']['second_name']}}</h2>
                        <h2 class="ladder-title">{{$blocks['reviews']['name']}}</h2>
                    </div>
                </div>
                <div class="review-bottom">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="review">
                                        <div class="review-title">
                                            {{$review['name']}}
                                        </div>
                                        <div class="review-text">
                                            @php echo html_entity_decode($review['text']) @endphp
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
