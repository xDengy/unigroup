@extends('layout')

@section('body')
    @if(!empty($blocks['rent-page']))
        <section class="rent-page">
            <div class="container">
                <div class="rent-page-wrapper">
                    <div class="rent-page-wrapper-top">
                        <div class="ladder">
                            <h2 class="ladder-title-background">{{$blocks['rent-page']['second_name']}}</h2>
                            <h1 class="ladder-title">{{$blocks['rent-page']['name']}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            @if( !empty($blocks['rent-page']['attachment']) )
                <div class="rent-page-image">
                    <img src="{{$blocks['rent-page']['attachment'][0]['url']}}" alt="">
                </div>
            @endif
        </section>
    @endif
    <section class="rent-block">
        <div class="container">
            <div class="rent-block-wrapper">
                @foreach($rents as $rent)
                    <div class="rent-block-item">
                        <div class="rent-block-item-top">
                            <div class="rent-block-image">
                                <img src="{{$rent['image']}}" alt="">
                            </div>
                            <div class="rent-block-title">
                                {{$rent['name']}}
                            </div>
                            <div class="rent-block-arrow">
                                <svg width="30" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5858 16.4142C14.3668 17.1953 15.6332 17.1953 16.4142 16.4142L29.1421 3.68629C29.9232 2.90524 29.9232 1.63891 29.1421 0.857864C28.3611 0.076815 27.0948 0.0768151 26.3137 0.857864L15 12.1716L3.68629 0.857865C2.90524 0.0768161 1.63891 0.0768162 0.857864 0.857865C0.0768151 1.63891 0.0768151 2.90524 0.857864 3.68629L13.5858 16.4142ZM13 14L13 15L17 15L17 14L13 14Z" fill="black"/>
                                </svg>
                            </div>
                        </div>
                        <div class="rent-block-item-bottom">
                            <div class="rent-block-item-items">
                                @foreach($rent->items as $item)
                                    <div class="rent-block-sub-item">
                                        <div class="rent-block-sub-item-title">
                                            {{$item['name']}}
                                        </div>
                                        <div class="rent-block-sub-item-price">
                                            {{$item['price']}} руб\час
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('form')
@endsection
