@if( !empty($blocks['form']) )
    <section class="form">
        <div class="container">
            @if ( !empty($blocks['form']['attachment']) )
                <div class="form-image">
                    <img src="{{$blocks['form']['attachment'][0]['url']}}" alt="">
                </div>
            @endif
            <form method="post" class="form-form" enctype="multipart/form-data">
                <div class="form-block"></div>
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
    <div class="form-popup">
        <div class="form-popup-shadow"></div>
        <div class="form-popup-body">
            <div class="form-popup-wrapper">
                <div class="form-popup-wrapper-close">
                    <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="17.7004" y1="53.8337" x2="53.8327" y2="17.7014" stroke="#3A3C35" stroke-width="3.40659"/>
                        <line x1="19.2766" y1="16.8208" x2="56.7871" y2="53.2343" stroke="#3A3C35" stroke-width="3.40659"/>
                    </svg>
                </div>
                <div class="form-popup-wrapper-icon">
                    <svg class="form-popup-wrapper-icon-success" width="195" height="153" viewBox="0 0 195 153" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M164.531 0L73.125 91.8L30.4688 48.96L0 79.56L73.125 153L195 30.6L164.531 0Z" fill="#90242E"/>
                    </svg>
                    <svg class="form-popup-wrapper-icon-error" xmlns="http://www.w3.org/2000/svg" fill="#90242E" width="195" height="153" viewBox="0 0 256 256" id="Flat">
                        <path d="M208.48535,191.51465a12.0001,12.0001,0,0,1-16.9707,16.9707L128,144.9707,64.48535,208.48535a12.0001,12.0001,0,0,1-16.9707-16.9707L111.0293,128,47.51465,64.48535a12.0001,12.0001,0,0,1,16.9707-16.9707L128,111.0293l63.51465-63.51465a12.0001,12.0001,0,0,1,16.9707,16.9707L144.9707,128Z"/>
                    </svg>
                    <svg class="form-popup-wrapper-icon-loading" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="195" height="153" style="shape-rendering: auto; background: transparent;" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <g transform="rotate(0 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.9166666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(30 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.8333333333333334s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(60 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.75s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(90 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.6666666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(120 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.5833333333333334s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(150 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.5s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(180 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.4166666666666667s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(210 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.3333333333333333s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(240 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.25s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(270 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.16666666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(300 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="-0.08333333333333333s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g transform="rotate(330 50 50)">
                                <rect fill="#90242e" height="12" width="6" ry="6" rx="3" y="24" x="47">
                                    <animate repeatCount="indefinite" begin="0s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                                </rect>
                            </g>
                            <g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="form-popup-wrapper-title">
                </div>
                <div class="form-popup-wrapper-description">
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let form = document.querySelector('.form-form');
            let title = document.querySelector('.form-popup-wrapper-title');
            let description = document.querySelector('.form-popup-wrapper-description');
            let formPopup = document.querySelector('.form-popup');
            let close = document.querySelector('.form-popup-wrapper-close');
            let icons = formPopup.querySelectorAll('.form-popup-wrapper-icon svg');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                form.classList.add('load');
                let name = form.querySelector('input[name="NAME"]').value;
                let phone = form.querySelector('input[name="PHONE"]').value;
                phone = phone.replaceAll('_', '');
                document.body.style.overflow = 'hidden';

                for (let i = 0; i < icons.length; i++) {
                    icons[i].classList.remove('active');
                }
                title.style.display = 'none';
                description.style.display = 'none';
                formPopup.classList.add('active');
                let icon = formPopup.querySelector('.form-popup-wrapper-icon-loading');
                icon.classList.add('active');

                axios.post('{{route('api.sendForm', [], false)}}', {
                    name: name,
                    phone: phone,
                    page: window.location.href
                })
                    .then(function (response) {
                        for (let i = 0; i < icons.length; i++) {
                            icons[i].classList.remove('active');
                        }
                        form.classList.remove('load');
                        title.textContent = 'Ваша заявка отправлена!';
                        description.textContent = 'Скоро наш менеджер свяжется с Вами';

                        title.style.display = 'block';
                        description.style.display = 'block';

                        icon = formPopup.querySelector('.form-popup-wrapper-icon-success');
                        icon.classList.add('active')
                    })
                    .catch(function (error) {
                        for (let i = 0; i < icons.length; i++) {
                            icons[i].classList.remove('active');
                        }
                        let text = [];
                        for (const key in error.response.data.errors) {
                            if (key == 'name') {
                                text.push('Не заполнено поле Имя')
                            }
                            if (key == 'phone') {
                                text.push('Не заполнено поле Телефон')
                            }
                        }
                        title.textContent = 'Ошибка отправки заявки!';
                        description.innerHTML = text.join('<br>');
                        form.classList.remove('load');

                        title.style.display = 'block';
                        description.style.display = 'block';

                        icon = formPopup.querySelector('.form-popup-wrapper-icon-error');
                        icon.classList.add('active')
                    });
            })

            close.addEventListener('click', () => {
                formPopup.classList.remove('active');
                document.body.style.overflow = 'auto';
            })
        })
    </script>
@endif
