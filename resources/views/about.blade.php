@extends('layout')

@section('body')
    @if( !empty($blocks['about']) )
        <section class="about">
            <div class="container">
                <div class="about-wrapper">
                    <div class="about-wrapper-top">
                        <div class="ladder">
                            <h2 class="ladder-title-background">{{$blocks['about']['second_name']}}</h2>
                            <h1 class="ladder-title">{{$blocks['about']['name']}}</h1>
                        </div>
                    </div>
                    <div class="about-wrapper-bottom">
                        @foreach($blocks['about']['attachment'] as $attachment)
                            <div class="about-image">
                                <img src="{{$attachment['url']}}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <div class="about-wrapper-bottom swiper-block">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($blocks['about']['attachment'] as $attachment)
                                    <div class="swiper-slide">
                                        <div class="about-image">
                                            <img src="{{$attachment['url']}}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="about-wrapper-text">
                        @php echo html_entity_decode($blocks['about']['text']) @endphp
                    </div>
                </div>
            </div>
            <div class="banner-strokes">
                <img src="{{asset('imgs/bannerStrokes.svg')}}" alt="">
            </div>
        </section>
    @endif
    @if( !empty($blocks['company-marquee']) )
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    @for($i = 0; $i < 4; $i++)
                        <div class="about-marquee-text">
                            @php echo html_entity_decode($blocks['company-marquee']['text']) @endphp
                        </div>
                    @endfor
                </div>

                <div aria-hidden="true" class="marquee-line">
                    @for($i = 0; $i < 4; $i++)
                        <div class="about-marquee-text">
                            @php echo html_entity_decode($blocks['company-marquee']['text']) @endphp
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    @endif
    @if( !empty($director) )
        <section class="director">
            <div class="container">
                <div class="director-wrapper">
                    <div class="director-image">
                        <img src="{{$director['picture']}}" alt="">
                    </div>
                    <div class="director-info">
                        <div class="director-post">
                            {{$director['post']}}
                        </div>
                        <div class="director-name">
                            {{$director['name']}}
                        </div>
                        <div class="director-description">
                            @php echo html_entity_decode($director['text']) @endphp
                        </div>
                        <div class="director-quote">
                            <div class="quote quote-left">
                                <svg width="174" height="31" viewBox="0 0 174 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M151.9 15V30.9H136V16.65L143.2 0H149.95L145.6 15H151.9ZM173.8 15V30.9H157.9V16.65L165.1 0H171.85L167.5 15H173.8Z" fill="#90242E"/>
                                    <line x1="-0.00732422" y1="27.5" x2="139.007" y2="27.5" stroke="#90242E" stroke-width="7"/>
                                </svg>
                            </div>
                            <div class="director-quote-text">
                                @php echo htmlspecialchars_decode($director['quote']) @endphp
                            </div>
                            <div class="quote quote-right">
                                <svg width="181" height="31" viewBox="0 0 181 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9 15V30.9H0V16.65L7.2 0H13.95L9.6 15H15.9ZM37.8 15V30.9H21.9V16.65L29.1 0H35.85L31.5 15H37.8Z" fill="#90242E"/>
                                    <line x1="37" y1="27.5" x2="181" y2="27.5" stroke="#90242E" stroke-width="7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <img src="{{$first['url']}}" alt="">
                </div>
            </div>
            @if( count($seconds) > 0 )
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
            @endif
        </section>
        <section class="gallery swiper-block">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach($blocks['gallery-2']['attachment'] as $pic)
                        <div class="swiper-slide">
                            <div class="gallery-image">
                                <img src="{{$pic['url']}}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    @endif
    @if( !empty($blocks['our-partners']) )
        <section class="rent">
            <div class="container">
                <div class="rent-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background">{{$blocks['our-partners']['second_name']}}</h2>
                        <h2 class="ladder-title">{{$blocks['our-partners']['name']}}</h2>
                    </div>
                </div>
                <div class="rent-bottom">
                    <div class="rent-text">
                        @php echo html_entity_decode($blocks['our-partners']['text']) @endphp
                    </div>
                </div>
            </div>
            @if ( !empty($partners) )
                <section class="partners">
                    <div class="partners-line partners-line-left"></div>
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
                    <div class="partners-line partners-line-right"></div>
                </section>
            @endif
        </section>
    @endif
    @if( !empty($blocks['certificates']) )
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                </div>
            </div>
        </section>
        <section class="certificates">
            <div class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($blocks['certificates']['attachment'] as $attachment)
                            <div class="swiper-slide">
                                <div class="certificate">
                                    <img src="{{$attachment['url']}}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['certificates']['second_name']}}</div>
                </div>
            </div>
        </section>
    @endif
    @if( !empty($blocks['faq']) )
        <section class="faq">
            <div class="container">
                <div class="faq-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background">{{$blocks['faq']['second_name']}}</h2>
                        <h2 class="ladder-title">{{$blocks['faq']['name']}}</h2>
                    </div>
                </div>
                <div class="faq-bottom">
                    @foreach( $faq as $faqItem )
                        <div class="faq-item">
                            <div class="faq-title-block">
                                <div class="faq-title">
                                    {{$faqItem['name']}}
                                </div>
                                <div class="dropdown-button">
                                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="-0.00170898" y1="10.868" x2="23" y2="10.868" stroke="#3A3C35" stroke-width="1.53344"/>
                                        <line x1="12.2659" y1="0.133789" x2="12.2659" y2="23.1355" stroke="#3A3C35" stroke-width="1.53344"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="faq-description-block">
                                <div class="faq-description">
                                    {{$faqItem['text']}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if( !empty($blocks['literacy']) )
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                </div>
            </div>
        </section>
        <section class="literacy">
            <div class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach( $blocks['literacy']['attachment'] as $attachment )
                            <div class="swiper-slide">
                                <div class="literacy-items">
                                    <img src="{{$attachment['url']}}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                    <div class="about-marquee-text">{{$blocks['literacy']['second_name']}}</div>
                </div>
            </div>
        </section>
    @endif
@endsection
