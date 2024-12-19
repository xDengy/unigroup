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

    let faqTitleBlock = document.querySelectorAll('.faq-title-block');
    for (let i = 0; i < faqTitleBlock.length; i++) {
        faqTitleBlock[i].addEventListener('click', () => {
            let parent = faqTitleBlock[i].closest('.faq-item');
            parent.classList.toggle('active');
        })
    }
})
