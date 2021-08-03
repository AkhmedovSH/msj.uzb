$(document).ready(function () {
	// Toggle favourite product
	$('.fav-btn').click(function (e) {
		e.preventDefault()
		$(this).parent('.products__item').toggleClass('products__item--is-fav')
	})

	// Dropdowns
	if ($(window).width() <= 992) {
		$('.nav__item--dropdown .nav__link').on('click', function (e) {
			// e.preventDefault()
			$('.dropdown-btn').not($(this).next('.dropdown-btn')).removeClass('dropdown-btn--active')
			$('.nav__item--dropdown .nav__link').not(this).next('.dropdown-btn').next('.nav--secondary').slideUp()
			$(this).next('.dropdown-btn').toggleClass('dropdown-btn--active')
			$(this).next('.dropdown-btn').next('.nav--secondary').slideToggle()
		})
		$('.nav__item--secondary-title').click(function () {
			$('.nav__item--secondary-title').not(this).removeClass('nav__item--secondary-title--active')
			$('.nav__item--secondary-title').not(this).next('.nav__item--secondary-dropdown').slideUp()
			$(this).toggleClass('nav__item--secondary-title--active')
			$(this).next('.nav__item--secondary-dropdown').slideToggle()
		})
	}

	// Select & Radio Styles
	$('.styler').styler()

	$('.form__input--mask').mask('+998 11 111 11 11')
	$('.form__input--mask').on('focus', function() {
		$('.form__input--mask').val('+998')
	})

	var defaultSize = document.getElementsByClassName("product-sidebar__size-link--active");
	var size = document.getElementById("size");
	size.value = defaultSize[0].innerHTML.replaceAll(/\s/g,'')
})

// Mobile Menu
const burgerButton = document.querySelector('.hamburger')
const menu = document.querySelector('.nav')

burgerButton.addEventListener('click', () => {
	burgerButton.classList.toggle('is-active')
	menu.classList.toggle('nav--active')
	document.body.classList.toggle('lock')
})
