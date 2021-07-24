$(document).ready(function () {
	// Categories tabs
	$('.tab__trigger').on('click', function (e) {
		e.preventDefault()

		$('.tab__trigger').not(this).removeClass('categories__link--active')
		$(this).addClass('categories__link--active')

		$('.tab__content').removeClass('tab__content--active')
		$($(this).attr('href')).addClass('tab__content--active')

		$('input[name="where-to-add"]').val($(this).attr('href').slice(1))
	})

	// Select onchange tabs
	$('.add-product__select--trigger').on('change', function (e) {
		$target = e.target.value

		$('.add-product__select-subcategory').removeClass('add-product__select-subcategory--active')
		$(`div[data-target=${$target}]`).addClass('add-product__select-subcategory--active')
	})

	// Modal
	$('.modal__link').on('click', function (e) {
		e.preventDefault()
		$('.modal').hide()
	})

	$('.hide-modal__btn').on('click', function (e) {
		e.preventDefault()
		$('.hide-modal').show()
	})

	$('.delete-modal__btn').on('click', function (e) {
		e.preventDefault()
		$('.delete-modal').show()
	})
})
