import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    let burger = document.querySelector('.burger')
    let mobile = document.querySelector('.mobile')
    if (burger && mobile) {
        burger.addEventListener('click', () => {
            burger.classList.toggle('active');
            mobile.classList.toggle('active');
        })
    }

    let tels = document.querySelectorAll('input[type="tel"]');
    let im = new Inputmask("+7 (999) 999-99-99");
    for (let i = 0; i < tels.length; i++) {
        im.mask(tels[i]);
    }

    const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        speed: 400,
        loop: true,
    });

    const aboutSwiper = new Swiper('.page-about .swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 400,
        loop: true,
    });

    const portfolioSwiper = new Swiper('.page-portfolio .swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 400,
        loop: true,
        navigation: {
            nextEl: ".portfolio-swiper-button-next",
            prevEl: ".portfolio-swiper-button-prev",
        },
    });

    let faqTitleBlock = document.querySelectorAll('.faq-title-block');
    for (let i = 0; i < faqTitleBlock.length; i++) {
        faqTitleBlock[i].addEventListener('click', () => {
            let parent = faqTitleBlock[i].closest('.faq-item');
            parent.classList.toggle('active');
        })
    }

    let portfolioVideoButton = document.querySelector('.page-portfolio .video-button')
    let portfolioVideo = document.querySelector('.page-portfolio video')
    if (portfolioVideoButton && portfolioVideo) {
        portfolioVideo.onpause = function () {
            portfolioVideoButton.parentElement.classList.remove('play');
            portfolioVideo.removeAttribute('controls');
        }
        portfolioVideoButton.addEventListener('click', () => {
            if (portfolioVideo) {
                portfolioVideo.setAttribute('controls', true);
                portfolioVideo.play();
                portfolioVideoButton.parentElement.classList.add('play');
            }
        })
    }

    // let mapSection = document.querySelector('section.map')
    // if (mapSection) {
    //     initMap();
    //
    //     async function initMap() {
    //         // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
    //         await ymaps3.ready;
    //
    //         const {YMap, YMapDefaultSchemeLayer} = ymaps3;
    //
    //         // Иницилиазируем карту
    //         const map = new YMap(
    //             // Передаём ссылку на HTMLElement контейнера
    //             document.getElementById('map'),
    //
    //             // Передаём параметры инициализации карты
    //             {
    //                 location: {
    //                     // Координаты центра карты
    //                     center: [37.588144, 55.733842],
    //
    //                     // Уровень масштабирования
    //                     zoom: 10
    //                 }
    //             }
    //         );
    //
    //         // Добавляем слой для отображения схематической карты
    //         map.addChild(new YMapDefaultSchemeLayer());
    //     }
    // }
})
