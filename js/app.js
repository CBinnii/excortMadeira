// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");
    var collapse = document.getElementById("navbar-collapse");

    if (collapse.classList.contains("show")) {
        collapse.classList.remove("show");
    } else {
        collapse.classList.add("show");
    }

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }
}

var swiperHome = new Swiper(".slider-home", {
    navigation: {
        nextEl: ".swiper-button-next-slider-home",
        prevEl: ".swiper-button-prev-slider-home",
    },
});

var swiperGeneral = new Swiper(".slider-general", {
    navigation: {
        nextEl: ".swiper-button-next-slider-general",
        prevEl: ".swiper-button-prev-slider-general",
    },
});

var swiperTopExcorts = new Swiper(".slider-top-escorts", {
    navigation: {
        nextEl: ".swiper-button-next-top-escorts",
        prevEl: ".swiper-button-prev-top-escorts",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

var swiperBlog = new Swiper(".slider-blog", {
    navigation: {
        nextEl: ".swiper-button-next-blog",
        prevEl: ".swiper-button-prev-blog",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

var swiperWhy = new Swiper(".slider-why", {
    loop: true,
    pagination: {
        el: ".swiper-pagination-why",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 30,
            effect: "fade",
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        991: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});