<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/bootstrap-grid/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/normalize/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/splide/splide.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/splide/splide-default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/jq-form-styler/jquery.formstyler.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/jq-form-styler/jquery.formstyler.theme.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/styles/navfooter.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/assets/styles/index.css')}}" />

	<link rel="stylesheet" href="{{ asset('public/assets/styles/blog-inner.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/assets/styles/basket.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/assets/styles/ordering-form.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/assets/styles/product.css')}}" />
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
								<img src="/public/assets/icons/logo.svg" alt="Logo">
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
										<a href="javascript:void(0);" class="nav__link">{{ $item->name }}</a>
										<button class="dropdown-btn mobile-visible"></button>
										<div class="nav--secondary">
											@foreach ($item->childs as $item2)
											<ul class="nav__list nav__list--secondary offset-lg-1">
												<li class="nav__item nav__item--secondary nav__item--secondary-title">{{ $item2->name }}</li>
												<div class="nav__item--secondary-dropdown">
													@foreach ($item2->childs as $item3)
													<li class="nav__item nav__item--secondary">
														<a href="{{ route('category.products', $item3->id) }}" class="nav__link nav__link--secondary">{{ $item3->name }}</a>
													</li>
													@endforeach
												</div>
											</ul>
											@endforeach
											<ul class="nav__list nav__list--secondary">
												<li class="nav__item nav__item--secondary nav__item--secondary-title">Бренды</li>
												<div class="nav__item--secondary-dropdown">
													@foreach ($item->brands as $brand)
													<li class="nav__item nav__item--secondary">
														<a href="/for-women" class="nav__link nav__link--secondary">{{ $brand->name }}</a>
													</li>
													@endforeach
												</div>
											</ul>
										</div>
									</li>
									@endforeach
									<li class="nav__item">
										<a href="/delivery.php" class="nav__link">Доставка</a>
									</li>
									<li class="nav__item">
										<a href="tel:+998993077622" class="nav__link">+998 99 307 76 22</a>
									</li>
								</ul>
								<div class="change-language mobile-visible">
									<a href="javascript:void(0);" class="uz-lang change-language__link">UZ</a>
									<p href="#!" class="ru-lang change-language__link change-language__link--active">RU</p>
								</div>
							</nav>

							<div class="header__box">
								<div class="activities">
									<a href="/favourites.php" class="favourites-icon activities__link"></a>
									<a href="/basket.php" class="basket-icon activities__link">
										<span class="basket-icon__text">2</span>
									</a>
								</div>
								<div class="change-language mobile-hidden">
									<a href="javascript:void(0);" class="uz-lang change-language__link">UZ</a>
									<p href="#!" class="ru-lang change-language__link change-language__link--active">RU</p>
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
							<img src="/public/assets/icons/logo.svg" alt="Logo">
						</a>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-12 d-md-block d-none">
						<ul class="footer__list footer__list--mobile-hidden">
							<li class="footer__item">
								<a href="/for-women" class="footer__link">Для женщин</a>
							</li>
							<li class="footer__item">
								<a href="/for-men" class="footer__link">Для мужчин</a>
							</li>
							<li class="footer__item">
								<a href="/for-girls" class="footer__link">Для девочек</a>
							</li>
							<li class="footer__item">
								<a href="/for-boys" class="footer__link">Для мальчиков</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-12">
						<ul class="footer__list">
							<li class="footer__item">
								<a href="tel:+998993077622" class="footer__link">+998 99 307 76 22</a>
							</li>
							<li class="footer__item">
								<a href="/delivery.php" class="footer__link">Доставка</a>
							</li>
							<li class="footer__item">
								<a href="/public-offer.php" class="footer__link">Публичная оферта</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-12">
						<p class="footer__socials-title">Мы с соц. сетях</p>
						<ul class="footer__socials-list">
							<!-- <li class="footer__socials-item">
								<a href="javascript:void(0);" class="footer__socials-link">
									<img src="/public/assets/icons/facebook.svg" alt="Facebook Logo">
								</a>
							</li> -->
							<li class="footer__socials-item">
								<a href="https://www.instagram.com/msj__shop/" class="footer__socials-link">
									<img src="/public/assets/icons/instagram.svg" alt="Instagram Logo">
								</a>
							</li>
							<li class="footer__socials-item">
								<a href="https://t.me/msj_shop" class="footer__socials-link">
									<img src="/public/assets/icons/telegram.svg" alt="Telegram Logo">
								</a>
							</li>
						</ul>
						<div class="developer">
							<a href="https://kirano.uz">Разработано в Кирано</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="{{ asset('public/assets/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('public/assets/libs/splide/splide.min.js')}}"></script>
	<script src="{{ asset('public/assets/libs/jq-form-styler/jquery.formstyler.min.js')}}"></script>
	<script src="{{ asset('public/assets/libs/slick/slick.min.js')}}"></script>
	<script src="{{ asset('public/assets/libs/jquery-mask/jquery-mask-min.js')}}"></script>
	<script src="{{ asset('public/assets/scripts/main.js')}}"></script>

	<script src="{{ asset('public/assets/scripts/index.js')}}"></script>
	<script src="{{ asset('public/assets/scripts/thumbnail-slider.js')}}"></script>

</body>
</html>