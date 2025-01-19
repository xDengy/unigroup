import './bootstrap';
import Fancybox from "./fancybox.min";

document.addEventListener('DOMContentLoaded', () => {
    let burger = document.querySelector('.burger')
    let mobile = document.querySelector('.mobile')
    if (burger && mobile) {
        burger.addEventListener('click', () => {
            document.body.classList.toggle('overflow-hidden');
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
        allowSlideNext: true,
        allowSlidePrev: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        speed: 600,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
    });

    const aboutSwiper = new Swiper('.page-about .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
    });

    const portfolioSwiper = new Swiper('.page-portfolio .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: ".portfolio-swiper-button-next",
            prevEl: ".portfolio-swiper-button-prev",
        },
    });

    const gallerySwiper = new Swiper('.gallery-2.swiper-block .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: ".portfolio-swiper-button-next",
            prevEl: ".portfolio-swiper-button-prev",
        },
    });

    const portfoliosSwiper = new Swiper('section.projects .projects-wrapper-bottom.swiper-block .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    const reviewsSwiper = new Swiper('.reviews .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1215: {
                slidesPerView: 3,
            },
        }
    });

    const aboutWrapperSwiper = new Swiper('.about-wrapper-bottom.swiper-block .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    const aboutGallerySwiper = new Swiper('.page-about .gallery .swiper', {
        spaceBetween: 20,
        speed: 600,
        allowSlideNext: true,
        allowSlidePrev: true,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        slideToClickedSlide: true,
        watchSlidesVisibility: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
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

    let rentArrows = document.querySelectorAll('.rent-block-arrow');
    for (let i = 0; i < rentArrows.length; i++) {
        rentArrows[i].addEventListener('click', () => {
            rentArrows[i].closest('.rent-block-item').classList.toggle('show')
        })
    }

    let mapSection = document.querySelector('.page-contacts section.map')
    if (mapSection) {
        window.initMap = async function (marks) {
            let ymaps3 = window.ymaps3;
            if (ymaps3) {
                await ymaps3.ready;
                ymaps3.import.registerCdn('https://cdn.jsdelivr.net/npm/{package}', '@yandex/ymaps3-default-ui-theme@latest');

                const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer} = ymaps3;
                const {YMapDefaultMarker} = await ymaps3.import('@yandex/ymaps3-default-ui-theme');

                // Иницилиазируем карту
                const map = new YMap(
                    // Передаём ссылку на HTMLElement контейнера
                    document.getElementById('map'),

                    // Передаём параметры инициализации карты
                    {
                        location: {
                            // Координаты центра карты
                            center: [37.588144, 55.733842],
                            // Уровень масштабирования
                            zoom: 10
                        },
                    }
                );

                // Добавляем слой для отображения схематической карты
                map.addChild(new YMapDefaultSchemeLayer());

                map.addChild(new YMapDefaultFeaturesLayer());
                marks.forEach((markerSource) => {
                    const marker = new YMapDefaultMarker(markerSource);
                    map.addChild(marker);
                });
            }
        }
    }

    let blocks = document.querySelectorAll('section');

    function checkBlocksVisibility() {
        let windowHeight = window.innerHeight;

        blocks.forEach(block => {
            let blockPosition = block.getBoundingClientRect().top;

            if (blockPosition < windowHeight - 100) {
                block.style.opacity = "1";
                block.style.transform = "translateY(0)";
            }
        });
    }

    checkBlocksVisibility();

    window.addEventListener('scroll', function() {
        checkBlocksVisibility();
    });

    Fancybox.Fancybox.bind(".fancybox", {});
})
