@extends('layout')

@section('body')
    @if( !empty($blocks['portfolio']) )
        <section class="portfolio-banner">
            @if( count($blocks['portfolio']['attachment']) > 0 ) @endif
            <div class="portfolio-banner-image">
                <img src="{{$blocks['portfolio']['attachment'][0]['url']}}" alt="">
            </div>
            <div class="portfolio-banner-container">
                <div class="container">
                    <div class="portfolio-banner-wrapper">
                        <h1>{{$blocks['portfolio']['name']}}</h1>
                        <div class="portfolio-banner-text">
                            @php echo html_entity_decode($blocks['portfolio']['text']) @endphp
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if( !empty($portfolios) )
        <section class="portfolio">
            <div class="container">
                <div class="portfolio-wrapper">
                    @foreach($portfolios as $portfolio)
                        @switch($portfolio['type'])
                            @case('default')
                                <div class="portfolio-item" id="{{$portfolio['id']}}">
                                    <div class="portfolio-item-image-block">
                                        <div class="swiper">
                                            <div class="swiper-wrapper">
                                                @foreach($portfolio['attachment'] as $attachment)
                                                    <div class="swiper-slide">
                                                        <div class="portfolio-image">
                                                            <img src="{{$attachment['url']}}" alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="portfolio-swiper-navigation">
                                                <div class="portfolio-swiper-button-prev"></div>
                                                <div class="portfolio-swiper-button-next"></div>
                                            </div>
                                        </div>
                                        @if( !empty(unserialize($portfolio['chars'])))
                                            <div class="portfolio-item-chars">
                                                @foreach(unserialize($portfolio['chars']) as $char)
                                                    <div class="portfolio-item-char">
                                                        <div class="portfolio-item-char-image">

                                                        </div>
                                                        <div class="portfolio-item-char-text">
                                                            {{$char}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    <div class="portfolio-item-text-block">
                                        <h3>
                                            {{$portfolio['name']}}
                                        </h3>
                                        <div class="portfolio-item-text">
                                            @php echo html_entity_decode($portfolio['text']) @endphp
                                        </div>
                                    </div>
                                </div>
                                @break(true)
                            @case('reverse')
                                <div class="portfolio-item portfolio-item-reverse" id="{{$portfolio['id']}}">
                                    <div class="portfolio-item-image-block">
                                        <div class="swiper">
                                            <div class="swiper-wrapper">
                                                @foreach( $portfolio['attachment'] as $attachment )
                                                    <div class="swiper-slide">
                                                        <div class="portfolio-image">
                                                            <img src="{{$attachment['url']}}" alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @if( !empty(unserialize($portfolio['chars'])) )
                                            <div class="portfolio-item-chars">
                                                @foreach(unserialize($portfolio['chars']) as $char)
                                                    <div class="portfolio-item-char">
                                                        <div class="portfolio-item-char-image">

                                                        </div>
                                                        <div class="portfolio-item-char-text">
                                                            {{$char}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    <div class="portfolio-item-text-block">
                                        <h3>
                                            {{$portfolio['name']}}
                                        </h3>
                                        <div class="portfolio-item-text">
                                            @php echo html_entity_decode($portfolio['text']) @endphp
                                        </div>
                                    </div>
                                </div>
                                @break(true)
                            @case('simple')
                                <div class="portfolio-item portfolio-item-simple" id="{{$portfolio['id']}}">
                                    @if( !empty($portfolio['attachment']) )
                                        <div class="portfolio-item-clear-image-wrapper">
                                            <div class="portfolio-item-clear-image">
                                                <img src="{{$portfolio['attachment'][0]['url']}}" alt="">
                                            </div>
                                            <div class="portfolio-item-clear-image-col">
                                                @if( count($portfolio['attachment']) > 1 )
                                                    <div class="portfolio-item-clear-col-image">
                                                        <img src="{{$portfolio['attachment'][1]['url']}}" alt="">
                                                    </div>
                                                @endif
                                                <h3>{{$portfolio['name']}}</h3>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="portfolio-item-clear-text">
                                        @php echo html_entity_decode($portfolio['text']) @endphp
                                    </div>
                                </div>
                                @break(true)
                            @case('additional')
                                @php $additionalText = unserialize($portfolio['additional_text']) @endphp
                                <div class="portfolio-item portfolio-item-additional" id="{{$portfolio['id']}}">
                                    <h3>{{$portfolio['name']}}</h3>
                                    <div class="portfolio-item-collapse-image">
                                        @if( !empty($additionalText) )
                                            <div class="portfolio-item-collapse-additional-text portfolio-item-collapse-additional-text--left">
                                                <div class="portfolio-item-collapse-additional-text-stroke">{{$additionalText[0]}}</div>
                                                <div class="additional-text-stroke"></div>
                                            </div>
                                        @endif
                                        @if( !empty($portfolio['attachment']) )
                                            <img src="{{$portfolio['attachment'][0]['url']}}" alt="">
                                        @endif
                                        @if( count($additionalText) > 1 )
                                            <div class="portfolio-item-collapse-additional-text portfolio-item-collapse-additional-text--right">
                                                <div class="additional-text-stroke"></div>
                                                <div class="portfolio-item-collapse-additional-text-stroke">{{$additionalText[1]}}</div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="portfolio-item-collapse-text-wrapper">
                                        <div class="portfolio-item-collapse-text">
                                            @php echo html_entity_decode($portfolio['text']) @endphp
                                        </div>
                                    </div>
                                </div>
                                @break(true)
                        @endswitch
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if( !empty($blocks['portfolio-video']) && !empty($blocks['portfolio-video']['attachment']) )
        <section class="portfolio-video">
            <div class="container">
                <div class="video-wrapper">
                    <div class="video-button">
                        <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14.5L0.25 28.7894L0.25 0.210581L25 14.5Z" fill="#90242E"/>
                        </svg>
                    </div>
                    <video>
                        <source src="{{$blocks['portfolio-video']['attachment'][0]['url']}}" type="{{$blocks['portfolio-video']['attachment'][0]['mime']}}" />
                    </video>
                </div>
            </div>
        </section>
    @endif
@endsection
