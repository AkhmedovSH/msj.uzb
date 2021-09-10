$(document).ready(function () {
    // Product Sliders
    $(".product-sidebar__slider").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        speed: 300,
        prevArrow: $(".product-sidebar__slider-prev"),
        nextArrow: $(".product-sidebar__slider-next"),
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 375,
                settings: {
                    slidesToShow: 2.25,
                },
            },
        ],
    });

    // slider
    $slick_slider = $(".product-content__slider");
    slick_on_mobile($slick_slider);

    // slick on mobile
    function slick_on_mobile(slider) {
        $(window).on("load resize", function () {
            if ($(window).width() > 991) {
                if (slider.hasClass("slick-initialized")) {
                    slider.slick("unslick");
                }
                return;
            }
            if (!slider.hasClass("slick-initialized")) {
                return slider.slick({
                    infinite: false,
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 300,
                    prevArrow: $(".product-content__slider-prev"),
                    nextArrow: $(".product-content__slider-next"),
                });
            }
        });
    }

    // Tabs
    $(".product-sidebar__size-link").click(function (e) {
        e.preventDefault();

        $(".product-sidebar__size-link")
            .not(this)
            .removeClass("product-sidebar__size-link--active");
        $(this).addClass("product-sidebar__size-link--active");

        $(".product-sidebar__price-item").removeClass(
            "product-sidebar__price-item--active"
        );
        $(`[data-id="${$(this).attr("href")}"]`).addClass(
            "product-sidebar__price-item--active"
        );
    });

    $(".fav-btn").on("click", function () {
        if ($(this).parent().hasClass("products__item--is-fav")) {
            $(".product-notify--fav").addClass("active");

            setTimeout(() => {
                $(".product-notify--fav").removeClass("active");
            }, 2000);
        }
    });

    $(".product-sidebar__wishlist-btn").on("click", function () {
        if ($(this).hasClass("active")) {
            $(".product-notify--fav").addClass("active");

            setTimeout(() => {
                $(".product-notify--fav").removeClass("active");
            }, 2000);
        }
    });

    // $('.product-sidebar__slider-item').click(function (e) {

    // 	$('.product-sidebar__slider-item').not(this).removeClass('product-sidebar__slider-item--active')
    // 	$(this).addClass('product-sidebar__slider-item--active')

    // 	$('.product-content__slider-wrapper').removeClass('product-content__slider-wrapper--active')
    // 	$(`[data-id="${$(this).attr('data-target')}"]`).addClass('product-content__slider-wrapper--active')

    // 	if ($(window).width() < 992) {
    // 		$('.product-content__slider').slick('unslick')
    // 		$(`[data-id="${$(this).attr('data-target')}"]`)
    // 			.children('.product-content__slider')
    // 			.slick({
    // 				infinite: false,
    // 				dots: false,
    // 				arrows: true,
    // 				slidesToShow: 1,
    // 				slidesToScroll: 1,
    // 				speed: 300,
    // 				prevArrow: $('.product-content__slider-prev'),
    // 				nextArrow: $('.product-content__slider-next'),
    // 			})
    // 	}
    // })
});

// Add to basket - notify-modal

const addBtn = document.querySelector(".product-sidebar__basket-btn");
const notifyModal = document.querySelector(".product-notify--basket");

addBtn.addEventListener("click", () => {
    notifyModal.classList.add("active");

    setTimeout(() => {
        notifyModal.classList.remove("active");
    }, 2000);
});

const openSizeModal = document.querySelector(".product-sidebar__size-btn");
const closeSizeModal = document.querySelector(".sizes-modal-close");
const sizeModal = document.querySelector(".sizes-modal");

openSizeModal.addEventListener("click", () => {
    sizeModal.style.display = "block";
    document.body.style.overflow = "hidden";
});

closeSizeModal.addEventListener("click", () => {
    sizeModal.style.display = "none";
    document.body.style.overflow = "";
});

document.addEventListener("keydown", (e) => {
    if (e.key == "Escape") {
        sizeModal.style.display = "none";
        document.body.style.overflow = "";
    }
});
