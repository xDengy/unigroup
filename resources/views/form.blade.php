@if( !empty($blocks['form']) )
    <section class="form">
        <div class="container">
            @if ( !empty($blocks['form']['attachment']) )
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
@endif
