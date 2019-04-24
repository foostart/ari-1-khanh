$( document ).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            960: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        }
    });
});
