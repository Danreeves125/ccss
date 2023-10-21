// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination, EffectFade } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

const footerLogos = new Swiper('.slider__footer-logos', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],
    spaceBetween: 15,
    breakpoints: {
        320: {
            slidesPerView: 2,
        },
        500: {
            slidesPerView: 3,
        },
        800: {
            slidesPerView: 4,
            loop: false
        },
    }
});

const missionLogos = new Swiper('.slider__mission-images', {
    // configure Swiper to use modules
    slidesPerView: 3,
    spaceBetween: 30,
});

const usps = new Swiper('.slider__usps', {
    modules: [Navigation],

    navigation: {
        nextEl: '#usp-next',
        prevEl: '#usp-prev',
    },
});

const latestTestimonials = new Swiper('.slider__testimonials', {
    modules: [Navigation, EffectFade, Pagination],
    slidesPerView: 1,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },

    pagination: {
        el: '.slider__dots',
        type: 'bullets',
        clickable: true,
    },

    navigation: {
        nextEl: '#testimonial-next',
        prevEl: '#testimonial-prev',
    },
});

const latestNews = new Swiper('.slider__news', {
    modules: [Pagination],
    slidesPerView: 1,

    pagination: {
        el: '#news-dots',
        type: 'bullets',
        clickable: true,
    },

    breakpoints: {
        550: {
            slidesPerView: 2,
        },
        750: {
            slidesPerView: 3,
        },
    }
});