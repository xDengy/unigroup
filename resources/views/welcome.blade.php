@extends('layout')

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
        @if( !empty($blocks['banner'] && !empty($blocks['banner']['attachment'])) )
            <div class="banner-textarea container">
                <div class="banner-text">
                    @php echo html_entity_decode($blocks['banner']['text']); @endphp
                    <div class="banner-text-shadow"></div>
                </div>
                <div class="banner-image">
                    <a class="fancybox" href="{{$blocks['banner']['attachment'][0]['url']}}" data-fancybox="banner">
                        <img src="{{$blocks['banner']['attachment'][0]['url']}}" alt="">
                    </a>
                    <div class="banner-square"></div>
                </div>
                <a href="{{$blocks['banner']['link']}}" class="banner-button">
                    {{$blocks['banner']['link_text']}}
                </a>
            </div>
            <div class="banner-strokes">
                <img src="{{asset('imgs/bannerStrokes.svg')}}" alt="">
            </div>
        @endif
    </section>
    @if( !empty($advantages) )
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
    @if( !empty($blocks['projects']) )
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
                        @foreach($portfolios as $portfolio)
                            <a href="{{route('portfolio')}}#{{$portfolio['id']}}" class="project">
                                <div class="project-image">
                                    <img src="{{$portfolio['preview']}}" alt="">
                                </div>
                                <div class="project-name">
                                    {{$portfolio['name']}}
                                </div>
                                <div class="project-description">
                                    @php echo html_entity_decode($portfolio['preview_text']) @endphp
                                </div>
                                <div class="project-delimiter"></div>
                                <div class="project-detail">
                                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M57.2986 4.0002C57.2986 2.06721 55.7316 0.500207 53.7986 0.500203L22.2986 0.500204C20.3656 0.500205 18.7986 2.06721 18.7986 4.0002C18.7986 5.9332 20.3656 7.50021 22.2986 7.5002L50.2986 7.5002L50.2986 35.5002C50.2986 37.4332 51.8656 39.0002 53.7986 39.0002C55.7316 39.0002 57.2986 37.4332 57.2986 35.5002L57.2986 4.0002ZM5.47487 57.2737L56.2735 6.47508L51.3237 1.52533L0.525126 52.324L5.47487 57.2737Z" fill="#E8E8E8"/>
                                    </svg>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="projects-wrapper-bottom swiper-block">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($portfolios as $portfolio)
                                    <div class="swiper-slide">
                                        <a href="{{route('portfolio')}}#{{$portfolio['id']}}" class="project">
                                            <div class="project-image">
                                                <img src="{{$portfolio['preview']}}" alt="">
                                            </div>
                                            <div class="project-name">
                                                {{$portfolio['name']}}
                                            </div>
                                            <div class="project-description">
                                                @php echo html_entity_decode($portfolio['preview_text']) @endphp
                                            </div>
                                            <div class="project-delimiter"></div>
                                            <div class="project-detail">
                                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M57.2986 4.0002C57.2986 2.06721 55.7316 0.500207 53.7986 0.500203L22.2986 0.500204C20.3656 0.500205 18.7986 2.06721 18.7986 4.0002C18.7986 5.9332 20.3656 7.50021 22.2986 7.5002L50.2986 7.5002L50.2986 35.5002C50.2986 37.4332 51.8656 39.0002 53.7986 39.0002C55.7316 39.0002 57.2986 37.4332 57.2986 35.5002L57.2986 4.0002ZM5.47487 57.2737L56.2735 6.47508L51.3237 1.52533L0.525126 52.324L5.47487 57.2737Z" fill="#E8E8E8"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"

                            ></div>
                        </div>
                    </div>
                    <a href="{{$blocks['projects']['link']}}" class="more-button more-button-bottom">
                        {{$blocks['projects']['link_text']}} <img src="{{asset('imgs/arrow.svg')}}" alt="">
                    </a>
                </div>
            </div>
        </section>
    @endif
    @if( !empty($marquees) )
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
    @if( !empty($blocks['rent']) )
        <section class="rent">
            <div class="container">
                <div class="rent-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background">{{$blocks['rent']['second_name']}}</h2>
                        <h2 class="ladder-title">{{$blocks['rent']['name']}}</h2>
                    </div>
                    <a href="{{$blocks['rent']['link']}}" class="more-button">
                        {{$blocks['rent']['link_text']}} <img src="{{asset('imgs/arrow.svg')}}" alt="">
                    </a>
                </div>
                <div class="rent-bottom">
                    <div class="rent-text">
                        @php echo html_entity_decode($blocks['rent']['text']) @endphp
                    </div>
                </div>
            </div>
            @if ( !empty($blocks['rent']['attachment']) )
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
    @endif
    @if( !empty($blocks['gallery-1']) && !empty($blocks['gallery-1']['attachment']) )
        @php
            $first = array_shift($blocks['gallery-1']['attachment']);
            $seconds = array_chunk($blocks['gallery-1']['attachment'], 2);
        @endphp
        <section class="gallery">
            <div class="gallery-col">
                <div class="gallery-image">
                    <a class="fancybox" href="{{$first['url']}}" data-fancybox="gallery-1">
                        <img src="{{$first['url']}}" alt="">
                    </a>
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
                        <a class="fancybox" href="{{$second['url']}}" data-fancybox="gallery-1">
                            <img src="{{$second['url']}}" alt="">
                        </a>
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
                                <a class="fancybox" href="{{$second['url']}}" data-fancybox="gallery-1">
                                    <img src="{{$second['url']}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
    @if( !empty($blocks['map']) )
        <section class="map">
            <div class="container">
                <div class="map-text">
                    @php echo html_entity_decode($blocks['map']['text']) @endphp
                </div>
            </div>
            @if ( !empty($blocks['map']['attachment']) )
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
    @endif
    @include('form')
    @if (!empty($partners))
        <section class="partners">
            <div class="container">
                <div class="partners-wrapper">
                    @foreach($partners as $index => $partner)
                        <div class="partner">{{$partner['name']}}</div>
                        @if($index !== count($partners) - 1)
                            <div class="delimiter"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if( !empty($blocks['gallery-2']) && !empty($blocks['gallery-2']['attachment']) )
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
                                <a class="fancybox" href="{{$pic['url']}}" data-fancybox="gallery-2">
                                    <img src="{{$pic['url']}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
        <section class="gallery-2 swiper-block">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach($blocks['gallery-2']['attachment'] as $pic)
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <a class="fancybox" href="{{$pic['url']}}" data-fancybox="gallery-2-slider">
                                    <img src="{{$pic['url']}}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    @endif
    @if ( !empty($reviews) )
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
                                        <div class="review-text-wrapper">
                                            <div class="review-title">
                                                {{$review['name']}}
                                            </div>
                                            <div class="review-text">
                                                @php echo html_entity_decode($review['text']) @endphp
                                            </div>
                                        </div>
                                        <div class="review-text-btn">
                                            Читать далее
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
        <div class="review-popup">
            <div class="review-popup-shadow"></div>
            <div class="review-popup-body">
                <div class="review-popup-close">
                    <img src="{{asset('imgs/burgerClose.svg')}}" alt="">
                </div>
                <div class="review-popup-wrapper">
                    <div class="review-popup-title-wrapper">
                        <div class="review-popup-name">Отзыв</div>
                        <div class="review-popup-delimiter">\</div>
                        <div class="review-popup-title"></div>
                    </div>
                    <div class="review-popup-text">

                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
