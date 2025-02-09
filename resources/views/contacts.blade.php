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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let mapData = <?=json_encode($map)?>;
            let markersGeoJsonSource = [];
            for (let i = 0; i < mapData.length; i++) {
                markersGeoJsonSource.push({
                    coordinates: [mapData[i].coorX, mapData[i].coorY],
                    title: mapData[i].title,
                    subtitle: mapData[i].subtitle,
                    color: 'lavender',
                    size: 'normal',
                    iconName: 'fallback'
                })
            }
            window.initMap(markersGeoJsonSource);
        })
    </script>
@endsection
