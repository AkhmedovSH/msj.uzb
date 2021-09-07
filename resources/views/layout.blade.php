<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('/assets/libs/bootstrap-grid/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/normalize/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/splide/splide.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/splide/splide-default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/jq-form-styler/jquery.formstyler.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/jq-form-styler/jquery.formstyler.theme.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/libs/lightgallery/lightgallery-bundle.min.css')}}">

	<link rel="stylesheet" href="{{ asset('/assets/styles/navfooter.css')}}" />
	<link rel="stylesheet" href="{{ asset('/assets/styles/basket.css')}}" />
	<link rel="stylesheet" href="{{ asset('/assets/styles/ordering-form.css')}}" />
	<link rel="stylesheet" href="{{ asset('/assets/styles/product.css?ver=10')}}" />
	
	<title>msj</title>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="header__row">

							<a href="/" class="header__logo logo">
								<img src="/assets/icons/logo.svg" alt="Logo">
							</a>

							<button class="hamburger hamburger--squeeze" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>

							<nav class="header__nav nav">
								<ul class="nav__list">
									@foreach ($categories as $item)
									<li class="nav__item nav__item--dropdown">
										<a href="javascript:void(0);" class="nav__link">{{ $item['name_' . app()->getLocale()] }}</a>
										<button class="dropdown-btn mobile-visible"></button>
										<div class="nav--secondary">
											@foreach ($item->childs as $item2)
											<ul class="nav__list nav__list--secondary offset-lg-1">
												<li class="nav__item nav__item--secondary nav__item--secondary-title">{{ $item2['name_' . app()->getLocale()] }}</li>
												<div class="nav__item--secondary-dropdown">
													@foreach ($item2->childs as $item3)
													<li class="nav__item nav__item--secondary">
														<a href="{{ route('category.products.menu', $item3->id) }}" class="nav__link nav__link--secondary">{{ $item3['name_' . app()->getLocale()] }}</a>
													</li>
													@endforeach
												</div>
											</ul>
											@endforeach
											<ul class="nav__list nav__list--secondary">
												<li class="nav__item nav__item--secondary nav__item--secondary-title">{{ __('translation.brands') }}</li>
												<div class="nav__item--secondary-dropdown">
													@foreach ($item->brands as $brand)
													<li class="nav__item nav__item--secondary">
														<a href="{{ route('brand.products', $brand->id) }}" class="nav__link nav__link--secondary">{{ $brand->name }}</a>
													</li>
													@endforeach
												</div>
											</ul>
										</div>
									</li>
									@endforeach
									<li class="nav__item">
										<a href="/delivery" class="nav__link">{{ __('translation.delivery') }}</a>
									</li>
									<li class="nav__item">
										<a href="tel:+998993077622" class="nav__link">+998 99 307 76 22</a>
									</li>
								</ul>
								<div class="change-language mobile-visible">
									@if(App::isLocale('ru'))
									<a href="/locale/uz" class="uz-lang change-language__link">UZ</a>
									<a href="/locale/ru" class="ru-lang change-language__link">RU</a>
									@else
									<a href="/locale/uz" class="uz-lang change-language__link">UZ</a>
									<a href="/locale/ru" class="ru-lang change-language__link">RU</a>
									@endif
								</div>
							</nav>

							<div class="header__box">
								<div class="activities">
									<a href="javascript:void(0);" class="favourites-icon activities__link"></a>
									<a href="{{ route('basket') }}" class="basket-icon activities__link">
										<span class="basket-icon__text">{{ Cart::count() }}</span>
									</a>
								</div>
								<div class="change-language mobile-hidden">
									@if(App::isLocale('ru'))
									<a href="/locale/uz" class="uz-lang change-language__link">UZ</a>
									<a href="/locale/ru" class="ru-lang change-language__link">RU</a>
									@else
									<a href="/locale/uz" class="uz-lang change-language__link">UZ</a>
									<a href="/locale/ru" class="ru-lang change-language__link">RU</a>
									@endif
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</header>

		@yield('content')

		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-2 col-md-3 col-sm-4 col-12 offset-xl-2 offset-0">
						<a href="/" class="footer__logo logo">
							<img src="/assets/icons/logo.svg" alt="Logo">
						</a>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-12 d-md-block d-none">
						<ul class="footer__list footer__list--mobile-hidden">
							<li class="footer__item">
								<a href="/category-products/1" class="footer__link">{{ __('translation.for_women') }}</a>
							</li>
							<li class="footer__item">
								<a href="/category-products/2" class="footer__link">{{ __('translation.for_men') }}</a>
							</li>
							<li class="footer__item">
								<a href="/category-products/3" class="footer__link">{{ __('translation.for_girls') }}</a>
							</li>
							<li class="footer__item">
								<a href="/category-products/4" class="footer__link">{{ __('translation.for_boys') }}</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-12">
						<ul class="footer__list">
							<li class="footer__item">
								<a href="tel:+998993077622" class="footer__link">+998 99 307 76 22</a>
							</li>
							<li class="footer__item">
								<a href="/delivery" class="footer__link">{{ __('translation.delivery') }}</a>
							</li>
							<li class="footer__item">
								<a href="/public-offer" class="footer__link">{{ __('translation.offer') }}</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-12">
						<p class="footer__socials-title">{{ __('translation.socials') }}</p>
						<ul class="footer__socials-list">
							<!-- <li class="footer__socials-item">
								<a href="javascript:void(0);" class="footer__socials-link">
									<img src="/assets/icons/facebook.svg" alt="Facebook Logo">
								</a>
							</li> -->
							<li class="footer__socials-item">
								<a href="https://www.instagram.com/msj__shop/" class="footer__socials-link">
									<img src="/assets/icons/instagram.svg" alt="Instagram Logo">
								</a>
							</li>
							<li class="footer__socials-item">
								<a href="https://t.me/msj_shop" class="footer__socials-link">
									<img src="/assets/icons/telegram.svg" alt="Telegram Logo">
								</a>
							</li>
						</ul>
						<div class="developer">
							<a href="https://kirano.uz">{{ __('translation.developer') }}</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="{{ asset('/assets/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('/assets/libs/splide/splide.min.js')}}"></script>
	<script src="{{ asset('/assets/libs/jq-form-styler/jquery.formstyler.min.js')}}"></script>
	<script src="{{ asset('/assets/libs/slick/slick.min.js')}}"></script>
	<script src="{{ asset('/assets/libs/jquery-mask/jquery-mask-min.js')}}"></script>
	<script src="{{ asset('/assets/libs/lightgallery/lightgallery.min.js')}}"></script>
	<script src="{{ asset('/assets/libs/lightgallery/lg-zoom.umd.js') }}"></script>
	<script src="{{ asset('/assets/scripts/main.js')}}"></script>

	<script src="{{ asset('/assets/scripts/index.js')}}"></script>
	<script src="{{ asset('/assets/scripts/thumbnail-slider.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
	<script>
		lightGallery(document.getElementById('lightgallery'), {
			plugins: [lgZoom],
		});
		function incrementItem(e, productId) {
			const id = e.target.getAttribute('data-id');
			const quantity = e.target.getAttribute('data-qty');
			//const element = document.getElementById(productId)
			//element.innerHTML = Number(quantity) + 1
			
			axios.patch('/cart/update', {
				quantity: Number(quantity) + 1,
				prodid: id,
			}).then(function (response) {
				window.location.href = '{{route('basket')}}'
			}).catch(function (error) {
				console.log(error);
			});
		}

		function decrementItem(e, productId) {
			const id = e.target.getAttribute('data-id');
			const quantity = e.target.getAttribute('data-qty');
			//const element = document.getElementById(productId)
			//element.innerHTML = Number(quantity) + 1
			
			axios.patch('/cart/update', {
				quantity: Number(quantity) - 1,
				prodid: id,
			}).then(function (response) {
				window.location.href = '{{route('basket')}}'
			}).catch(function (error) {
				console.log(error);
			});
		}

		function setSize(size) {
			var x = document.getElementById("size");
			x.value = size
		}
	</script>

</body>
</html>