@extends('layout')

@section('body')
    @if(!empty($blocks['contacts']))
        <section class="contacts">
            <div class="container">
                <div class="contacts-wrapper">
                    <div class="contacts-wrapper-top">
                        <div class="ladder">
                            <h2 class="ladder-title-background">{{$blocks['contacts']['second_name']}}</h2>
                            <h1 class="ladder-title">{{$blocks['contacts']['name']}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="map">
        <div id="map"></div>
    </section>
    @if( !empty($settings) )
        <section class="contacts-info">
            <div class="container">
                <div class="contacts-info-wrapper">
                    <div class="contacts-info-row">
                        <a href="tel:{{$settings['phone']}}" class="contacts-info-phone">
                            {{$settings['phone']}}
                        </a>
                        <a href="mailto:{{$settings['email']}}" class="contacts-info-email">
                            {{$settings['email']}}
                        </a>
                    </div>
                    <div class="contacts-info-row">
                        <a href="{{$settings['vk']}}" class="contacts-info-vk">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.93026 3.93169C3.45271 4.41619 3.13897 5.09643 2.96405 6.3889C2.78497 7.72856 2.78358 9.50274 2.78358 12.0557V12.9442C2.78358 15.4931 2.78497 17.2658 2.96405 18.6041C3.13758 19.898 3.45271 20.5824 3.93165 21.071C4.41754 21.5472 5.09777 21.8624 6.38883 22.0359C7.72848 22.215 9.50265 22.2177 12.0556 22.2177H12.9441C15.4929 22.2177 17.2657 22.215 18.6053 22.0359C19.8978 21.8624 20.5822 21.5472 21.0708 21.0683C21.547 20.5838 21.8621 19.9035 22.0357 18.6111C22.2161 17.2714 22.2175 15.4972 22.2175 12.9442V12.0557C22.2175 9.50691 22.2148 7.73411 22.0371 6.39584C21.8621 5.10199 21.547 4.41758 21.0681 3.92891C20.5836 3.45274 19.9033 3.13761 18.6109 2.96408C17.2712 2.78499 15.4971 2.78222 12.9441 2.78222H12.0556C9.50682 2.78222 7.73404 2.78499 6.39578 2.96408C5.10194 3.13761 4.41892 3.45274 3.93026 3.93169ZM12.0556 0.00571276H12.9441C14.9501 0.00571276 16.9866 -0.0539822 18.9788 0.212562C20.5836 0.427741 21.9427 0.887253 23.0283 1.96176L23.0394 1.97425C24.1125 3.06264 24.5734 4.42174 24.7885 6.02795C25.0537 8.01731 24.994 10.0525 24.994 12.0557V12.9442C24.994 14.9489 25.0551 16.9854 24.7872 18.979C24.5734 20.5838 24.1125 21.9429 23.038 23.0285L23.0255 23.0396C21.9385 24.1127 20.5794 24.5722 18.9718 24.7888C16.9825 25.0539 14.9473 24.9942 12.9441 24.9942H12.0556C10.051 24.9942 8.01446 25.0539 6.02234 24.7874C4.41615 24.5722 3.05706 24.1127 1.97285 23.0382L1.96035 23.0257C0.888633 21.9373 0.427737 20.5782 0.21256 18.972C-0.0539817 16.984 0.0057127 14.9489 0.0057127 12.9442V12.0557C0.0057127 10.0511 -0.0539814 8.01454 0.213949 6.02101C0.427737 4.41619 0.888632 3.05709 1.96313 1.97148L1.97424 1.96037C3.06261 0.887253 4.4217 0.427741 6.02789 0.211174C8.01863 -0.0525938 10.0538 0.00571276 12.0556 0.00571276ZM4.22041 7.61056C4.35368 14.1076 7.60215 18.0058 13.2995 18.0058H13.6327V14.2908C15.7234 14.4991 17.3059 16.0317 17.939 18.0058H20.8959C20.5928 16.884 20.0552 15.8392 19.3187 14.9403C18.5821 14.0415 17.6633 13.3092 16.6229 12.7915C17.555 12.2237 18.36 11.4698 18.9877 10.577C19.6155 9.68415 20.0524 8.67148 20.2712 7.60223H17.5891C17.0061 9.66795 15.2736 11.5421 13.6327 11.717V7.61056H10.9423V14.8073C9.27637 14.3908 7.17735 12.375 7.08573 7.61056H4.22041Z" fill="#90242E"/>
                            </svg>
                        </a>
                        <a href="{{$settings['whatsapp']}}" class="contacts-info-whatsapp">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.3568 3.63756C20.2049 2.48019 18.8329 1.56252 17.321 0.938018C15.809 0.313515 14.1873 -0.00532895 12.5502 6.73687e-05C5.69095 6.73687e-05 0.100503 5.56255 0.100503 12.3875C0.100503 14.575 0.678392 16.7 1.75879 18.575L0 25L6.59548 23.275C8.41708 24.2625 10.4648 24.7875 12.5502 24.7875C19.4095 24.7875 25 19.225 25 12.4C25 9.08754 23.706 5.97505 21.3568 3.63756ZM12.5502 22.6875C10.691 22.6875 8.86935 22.1875 7.27387 21.25L6.89698 21.025L2.97739 22.05L4.0201 18.25L3.76884 17.8625C2.73561 16.2213 2.18709 14.3241 2.18593 12.3875C2.18593 6.71255 6.83417 2.08756 12.5377 2.08756C15.3015 2.08756 17.902 3.16256 19.8492 5.11255C20.8136 6.06738 21.5778 7.20323 22.0975 8.45421C22.6172 9.70518 22.8822 11.0464 22.8769 12.4C22.902 18.075 18.2538 22.6875 12.5502 22.6875ZM18.2286 14.9875C17.9146 14.8375 16.3819 14.0875 16.1055 13.975C15.8166 13.875 15.6156 13.825 15.402 14.125C15.1884 14.4375 14.598 15.1375 14.4221 15.3375C14.2462 15.55 14.0578 15.575 13.7437 15.4125C13.4296 15.2625 12.4246 14.925 11.2437 13.875C10.3141 13.05 9.69849 12.0375 9.51005 11.725C9.33417 11.4125 9.48492 11.25 9.64824 11.0875C9.78643 10.95 9.96231 10.725 10.1131 10.55C10.2638 10.375 10.3266 10.2375 10.4271 10.0375C10.5276 9.82504 10.4774 9.65004 10.402 9.50004C10.3266 9.35004 9.69849 7.82505 9.44723 7.20005C9.19598 6.60005 8.93216 6.67505 8.74372 6.66255H8.1407C7.92713 6.66255 7.6005 6.73755 7.31156 7.05005C7.03517 7.36255 6.23115 8.11255 6.23115 9.63754C6.23115 11.1625 7.34925 12.6375 7.5 12.8375C7.65075 13.05 9.69849 16.175 12.8141 17.5125C13.5553 17.8375 14.1332 18.025 14.5854 18.1625C15.3266 18.4 16.005 18.3625 16.5452 18.2875C17.1482 18.2 18.392 17.5375 18.6432 16.8125C18.907 16.0875 18.907 15.475 18.8191 15.3375C18.7312 15.2 18.5427 15.1375 18.2286 14.9875Z" fill="#90242E"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if( !empty($blocks['map']) )
        <section class="map">
            <div class="container">
                <div class="map-title">
                    <div class="ladder">
                        <h2 class="ladder-title-background">{{$blocks['map']['name']}}</h2>
                        <h1 class="ladder-title">{{$blocks['map']['name']}}</h1>
                    </div>
                </div>
            </div>
            @if ( !empty($blocks['map']['attachment']) )
                <div class="map-image">
                    <img src="{{$blocks['map']['attachment'][0]['url']}}" alt="">
                </div>
            @endif
            <div class="container">
                <div class="map-text">
                    @php echo html_entity_decode($blocks['map']['text']) @endphp
                </div>
            </div>
        </section>
    @endif
    @include('form')
@endsection
