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
    pagination: {
        el: ".swiper-pagination-slider-home",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-slider-home",
        prevEl: ".swiper-button-prev-slider-home",
    },
});