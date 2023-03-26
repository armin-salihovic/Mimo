function setActiveTitleMobile () {
    const activeImg = document.querySelector('.swiper-slide-active img');

    if(activeImg === null) return;

    document.getElementById('img-title-mobile').innerText = activeImg.title;
}

function setActiveTitleDesktop () {
    const activeImg = document.querySelector('.swiper-slide-active img');

    if(activeImg === null) return;

    document.getElementById('img-title-desktop').innerText = activeImg.title;
}


function initSwiperMobile() {
    swiperType = 'mobile';
    swiper = new Swiper(".my-swiper", {
        loop: true,
        lazy: true,
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

    swiper.on('slideChangeTransitionEnd', function () {
        setActiveTitleMobile();
    });

    setActiveTitleMobile();
}

function initSwiperDesktop() {
    swiperType = 'desktop';
    swiper = new Swiper('.my-swiper', {
        loop: true,
        lazy: true,
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

    setActiveTitleDesktop();
}

let swiperType;
let swiper;

if(screen.width < 768) {
    initSwiperMobile();
} else {
    initSwiperDesktop();
}

window.addEventListener('resize', function(event){
    if(screen.width < 768 && swiperType !== 'mobile') {
        swiper.destroy();
        initSwiperMobile();
    } else if(screen.width >= 768 && swiperType !== 'desktop') {
        swiper.destroy();
        initSwiperDesktop();
    }
});
