@if( !empty($blocks['form']) )
    <section class="form">
        <div class="container">
            @if ( !empty($blocks['form']['attachment']) )
                <div class="form-image">
                    <img src="{{$blocks['form']['attachment'][0]['url']}}" alt="">
                </div>
            @endif
            <form method="post" class="form-form" enctype="multipart/form-data">
                @csrf
                <div class="form-title">
                    {{$blocks['form']['name']}}
                </div>
                <div class="form-description">
                    @php echo html_entity_decode($blocks['form']['text']) @endphp
                </div>
                <div class="form-error">
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
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let form = document.querySelector('.form-form');
            let errorFields = form.querySelector('.form-error')
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                errorFields.innerHTML = '';
                let name = form.querySelector('input[name="NAME"]').value;
                let phone = form.querySelector('input[name="PHONE"]').value;

                axios.post('{{route('api.sendForm', [], false)}}', {
                    name: name,
                    phone: phone,
                    page: window.location.href
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                        for (const key in error.response.data.errors) {
                            let element = document.createElement('div')
                            let text = '';
                            if (key == 'name') {
                                text = 'Не заполнено поле Имя';
                            }
                            if (key == 'phone') {
                                text = 'Не заполнено поле Телефон';
                            }
                            element.textContent = text;
                            errorFields.append(element)
                        }
                    });

            })
        })
    </script>
@endsection
