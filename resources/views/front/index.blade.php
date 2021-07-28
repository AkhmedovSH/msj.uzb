@extends('layout')
@section('content')

<main>

	<section class="hero">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="hero__splide splide">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide splide__slide--first">
									<div class="hero__box offset-1">
										<h2 class="hero__title">Акцент на комфорт и стиль</h2>
										<h3 class="hero__subtitle">Новая коллекция женской одежды</h3>
										<div class="hero__btn-group">
											<a href="/for-men" class="hero__btn">Перейти в магазин</a>
										</div>
									</div>
								</li>
								<li class="splide__slide splide__slide--second">
									<div class="hero__box offset-1">
										<h2 class="hero__title">50% скидки на летнюю коллекцию</h2>
										<h3 class="hero__subtitle"></h3>
										<div class="hero__btn-group">
											<a href="/for-men" class="hero__btn">Перейти в магазин</a>
										</div>
									</div>
								</li>
								<li class="splide__slide splide__slide--third">
									<div class="hero__box offset-1">
										<h2 class="hero__title">Cоздайте брутальный мужской стиль</h2>
										<h3 class="hero__subtitle"></h3>
										<div class="hero__btn-group">
											<a href="/for-men" class="hero__btn">Перейти в магазин</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.hero -->

	<section class="catalogue">
		<div class="container-fluid">

			<div class="row catalogue__mobile--hidden">
				<div class="col-lg-3 col-6">
					<a href="for-women" class="catalogue__item">
						<img src="/assets/img/index/catalogue-1.jpg" alt="Catalogue Image">
						<span>Одежда для женщин</span>
					</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="for-girls" class="catalogue__item catalogue__item--end">
						<img src="/assets/img/index/catalogue-2.jpg" alt="Catalogue Image">
						<span>Одежда для девочек</span>
					</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="for-men" class="catalogue__item">
						<img src="/assets/img/index/catalogue-3.jpg" alt="Catalogue Image">
						<span>Одежда для мужчин</span>
					</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="for-boys" class="catalogue__item catalogue__item--end">
						<img src="/assets/img/index/catalogue-4.jpg" alt="Catalogue Image">
						<span>Одежда для мальчиков</span>
					</a>
				</div>
			</div>

			<div class="row catalogue__mobile--visible">
				<div class="catalogue__splide splide">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
								<a href="for-women" class="catalogue__item">
									<img src="/assets/img/index/catalogue-1.jpg" alt="Catalogue Image">
									<span>Одежда для женщин</span>
								</a>
							</li>
							<li class="splide__slide">
								<a href="for-girls" class="catalogue__item catalogue__item--end">
									<img src="/assets/img/index/catalogue-2.jpg" alt="Catalogue Image">
									<span>Одежда для девочек</span>
								</a>
							</li>
							<li class="splide__slide">
								<a href="for-men" class="catalogue__item">
									<img src="/assets/img/index/catalogue-3.jpg" alt="Catalogue Image">
									<span>Одежда для мужчин</span>
								</a>
							</li>
							<li class="splide__slide">
								<a href="for-boys" class="catalogue__item catalogue__item--end">
									<img src="/assets/img/index/catalogue-4.jpg" alt="Catalogue Image">
									<span>Одежда для мальчиков</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- /.catalogue -->

	<section class="products">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h3 class="products__title">Новые поступления</h3>
				</div>
			</div>
			<div class="row">
				@foreach($newProducts as $item)
				<div class="col-lg-3 col-sm-6 col-12 d-flex">
					<a href="innerpages/product/product-1.php" class="products__item">
						<span class="products__image">
							<img src="/assets/img/index/pr-8.jpg" alt="Product Image">
						</span>
						<span class="products__name">{{ $item->name }}</span>
						<span class="products__sizes">XS S M L XL 2XL</span>
						<span class="products__price">{{ $item->price }} сум</span>
						<button class="products__btn fav-btn"></button>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- /.products -->

	<section class="banner banner--first">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-4 offset-xxl-6 col-lg-6 offset-lg-6 col-sm-8 offset-sm-4 col-12">
					<div class="banner__info">
						<h2 class="banner__title">Женские платья для теплых дней</h2>
						<div class="banner__btn-group">
							<a href="/for-men" class="banner__btn">Платье для неё</a>
							<a href="/for-men" class="banner__btn">Для девочек</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.banner -->

	<section class="banner banner--second">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-5 col-md-6">
					<div class="banner__info banner__info--secondary">
						<h2 class="banner__title banner__title--white">Летние скидки на все мужские поло</h2>
						<div class="banner__btn-group">
							<a href="/for-men" class="banner__btn">Перейти в магазин</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.banner -->

	<section class="products recommended">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h3 class="products__title">Рекомендуем</h3>
				</div>
			</div>
			<div class="row">
				@foreach($recommended as $item)
				<div class="col-lg-3 col-sm-6 col-12 d-flex">
					<a href="innerpages/product/product-1.php" class="products__item products__item--is-fav">
						<span class="products__image">
							<img src="/assets/img/index/pr-1.jpg" alt="Product Image">
						</span>
						<span class="products__name">{{ $item->name }}</span>
						<span class="products__sizes">XS S M L XL 2XL</span>
						<span class="products__price">{{ $item->price }} сум</span>
						<button class="products__btn fav-btn"></button>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- /.products -->

	<section class="blog">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<h3 class="blog__title">О моде, стиле и трендах</h3>
				</div>
			</div>

			<div class="row">
				<div class="blog__splide splide">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="innerpages/blog/blog-1.php" class="blog__link">
										<span class="blog__image">
											<img src="/assets/img/blog/blog-1.jpg" alt="Blog Preview Image">
										</span>
										<span class="blog__caption">4 главные вещи в летнем гардеробе</span>
										<span class="blog__subtitle">
											Что обязательно должно оказаться в стильном женском гардеробе этим летом?
										</span>
									</a>
								</div>
							</li>
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="innerpages/blog/blog-1.php" class="blog__link">
										<span class="blog__image">
											<img src="/assets/img/blog/blog-2.jpg" alt="Blog Preview Image">
										</span>
										<span class="blog__caption">Какую одежду купить ребенку на лето?</span>
										<span class="blog__subtitle">
											Составляем список
										</span>
									</a>
								</div>
							</li>
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="innerpages/blog/blog-1.php" class="blog__link">
										<span class="blog__image">
											<img src="/assets/img/blog/blog-3.jpg" alt="Blog Preview Image">
										</span>
										<span class="blog__caption">Собираемся в отпуск!</span>
										<span class="blog__subtitle">
											Что должно оказаться
											в чемодане?
										</span>
									</a>
								</div>
							</li>
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="innerpages/blog/blog-1.php" class="blog__link">
										<span class="blog__image">
											<img src="/assets/img/blog/blog-4.jpg" alt="Blog Preview Image">
										</span>
										<span class="blog__caption">Выбираем платье для пикника!</span>
										<span class="blog__subtitle">
											4 стильных варианта
										</span>
									</a>
								</div>
							</li>
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="innerpages/blog/blog-1.php" class="blog__link">
										<span class="blog__image">
											<img src="/assets/img/blog/blog-5.jpg" alt="Blog Preview Image">
										</span>
										<span class="blog__caption">Как носить джоггеры?</span>
										<span class="blog__subtitle">
											3 совета для мужчин
										</span>
									</a>
								</div>
							</li>
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="innerpages/blog/blog-1.php" class="blog__link">
										<span class="blog__image">
											<img src="/assets/img/blog/blog-6.jpg" alt="Blog Preview Image">
										</span>
										<span class="blog__caption">Что носить на пляже?</span>
										<span class="blog__subtitle">
											5 мужских комплектов с шортами
										</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- /.blog -->

</main>

@endsection