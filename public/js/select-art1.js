const swiper = new Swiper('.swiper-desktop', {
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    slidesPerView: 1,
    spaceBetween: 200,

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
});

swiper.on('slideChangeTransitionEnd', function () {
    setActiveTitleDesktop();
});

// for mobile

const swiperMobile = new Swiper(".swiper-mobile", {
    loop: true,
    direction: "vertical",
    mousewheel: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
});

swiperMobile.on('slideChangeTransitionEnd', function () {
    setActiveTitleMobile();
});

function setActiveTitleMobile () {
    const activeImg = document.querySelector('.swiper-mobile .swiper-slide-active img');

    if(activeImg === null) return;

    document.getElementById('img-title').innerText = activeImg.title;
}

function setActiveTitleDesktop () {
    const activeImg = document.querySelector('.swiper-desktop .swiper-slide-active img');

    if(activeImg === null) return;

    document.getElementById('img-title').innerText = activeImg.title;
}

if(screen.width < 768) {
    setActiveTitleMobile();
} else {
    setActiveTitleDesktop();
}
