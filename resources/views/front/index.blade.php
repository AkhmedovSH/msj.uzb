@extends('layout')

@section('custom-styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/assets/styles/index.css?ver=7')}}" />
@endsection

@section('content')

<main>

	<section class="hero">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="hero__splide splide">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide splide__slide--fourth">
									<div class="hero__box offset-1">
										<h2 class="hero__title hero__title--montserrat">
											AUTUMN <br>
											COLLECTION <br>
											2021
										</h2>
										<div class="hero__btn-group" style="z-index: 1">
											<a href="/category-products/2" class="hero__btn">{{
												__('translation.go_to_the_store') }}</a>
										</div>
									</div>
								</li>
								{{-- <li class="splide__slide splide__slide--first">
									<div class="hero__box offset-1">
										<h2 class="hero__title">{{ __('translation.accent_to_comfort_and_style') }}</h2>
										<h3 class="hero__subtitle">{{ __('translation.new_women_collection') }}</h3>
										<div class="hero__btn-group">
											<a href="/category-products/1" class="hero__btn">{{
												__('translation.go_to_the_store') }}</a>
										</div>
									</div>
								</li>
								<li class="splide__slide splide__slide--second">
									<div class="hero__box offset-1">
										<h2 class="hero__title">{{ __('translation.discount_to_summer_collection') }}
										</h2>
										<h3 class="hero__subtitle"></h3>
										<div class="hero__btn-group">
											<a href="/category-products/1" class="hero__btn">{{
												__('translation.go_to_the_store') }}</a>
										</div>
									</div>
								</li>
								<li class="splide__slide splide__slide--third">
									<div class="hero__box offset-1">
										<h2 class="hero__title">{{ __('translation.create_brutal_style') }}</h2>
										<h3 class="hero__subtitle"></h3>
										<div class="hero__btn-group">
											<a href="/category-products/2" class="hero__btn">{{
												__('translation.go_to_the_store') }}</a>
										</div>
									</div>
								</li> --}}
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
					<a href="/category-products/1" class="catalogue__item">
						<img src="/public/assets/img/index/catalogue-1.jpg" alt="Catalogue Image">
						<span>{{ __('translation.clothes_for_women') }}</span>
					</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="/category-products/3" class="catalogue__item catalogue__item--end">
						<img src="/public/assets/img/index/catalogue-2.jpg" alt="Catalogue Image">
						<span>{{ __('translation.clothes_for_girls') }}</span>
					</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="/category-products/2" class="catalogue__item">
						<img src="/public/assets/img/index/catalogue-3.jpg" alt="Catalogue Image">
						<span>{{ __('translation.clothes_for_man') }}</span>
					</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="/category-products/4" class="catalogue__item catalogue__item--end">
						<img src="/public/assets/img/index/catalogue-4.jpg" alt="Catalogue Image">
						<span>{{ __('translation.clothes_for_boys') }}</span>
					</a>
				</div>
			</div>

			<div class="row catalogue__mobile--visible">
				<div class="catalogue__splide splide">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
								<a href="/category-products/1" class="catalogue__item">
									<img src="/public/assets/img/index/catalogue-1.jpg" alt="Catalogue Image">
									<span>{{ __('translation.clothes_for_women') }}</span>
								</a>
							</li>
							<li class="splide__slide">
								<a href="/category-products/3" class="catalogue__item catalogue__item--end">
									<img src="/public/assets/img/index/catalogue-2.jpg" alt="Catalogue Image">
									<span>{{ __('translation.clothes_for_girls') }}</span>
								</a>
							</li>
							<li class="splide__slide">
								<a href="/category-products/2" class="catalogue__item">
									<img src="/public/assets/img/index/catalogue-3.jpg" alt="Catalogue Image">
									<span>{{ __('translation.clothes_for_man') }}</span>
								</a>
							</li>
							<li class="splide__slide">
								<a href="/category-products/4" class="catalogue__item catalogue__item--end">
									<img src="/public/assets/img/index/catalogue-4.jpg" alt="Catalogue Image">
									<span>{{ __('translation.clothes_for_boys') }}</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- /.catalogue -->

	<div class="product-notify product-notify--fav">
		<div class="product-notify__body">
			<p class="product-notify__text">{{ __('translation.successfully_added_to_fav') }}</p>
			<button class="product-notify__close-btn"></button>
		</div>
	</div>

	<section class="products">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h3 class="products__title">{{ __('translation.new_arrivals') }}</h3>
				</div>
			</div>
			<div class="row">
				@foreach($newProducts as $item)
				<div class="col-lg-3 col-sm-6 col-12 d-flex">
					<a href="{{ route('product', $item->id) }}" class="products__item">
						<span class="products__image">
							<img src="{{ '/uploads/products/' . $item->image }}" alt="Product Image">
						</span>
						<span class="products__name">{{ $item['name_' . app()->getLocale()] }}</span>
						<span class="products__sizes">
							@if($item->sizes)
							@foreach(explode(",", $item->sizes) as $size)
							{{ $size }}
							@endforeach
							@endif
						</span>
						<span class="products__price">{{ number_format($item->price, 0,","," ") }}
							{{ __('translation.soum') }}</span>
						<button class="products__btn fav-btn" onclick="selectFavourite({{$item->id}})"></button>
						<!-- <a href="{{ route('add.favourite', $item->id) }}">favourite</a> -->
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
						<h2 class="banner__title">{{ __('translation.womens_dresses_for_warm_days') }}</h2>
						<div class="banner__btn-group">
							<a href="/category-products/1" class="banner__btn">{{ __('translation.dress_for_her') }}</a>
							<a href="/category-products/3" class="banner__btn">{{ __('translation.for_girls') }}</a>
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
						<h2 class="banner__title banner__title--white">
							{{ __('translation.summer_discounts_on_all_men_polos') }}</h2>
						<div class="banner__btn-group">
							<a href="/category-products/2" class="banner__btn">{{ __('translation.go_to_the_store')
								}}</a>
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
					<h3 class="products__title">{{ __('translation.recommended') }}</h3>
				</div>
			</div>
			<div class="row">
				@foreach($recommended as $item)
				<div class="col-lg-3 col-sm-6 col-12 d-flex">
					<a href="{{ route('product', $item->id) }}" class="products__item">
						<span class="products__image">
							<img src="{{ '/uploads/products/' . $item->image }}" alt="Product Image">
						</span>
						<span class="products__name">{{ $item['name_' . app()->getLocale()] }}</span>
						<span class="products__sizes">
							@if($item->sizes)
							@foreach(explode(",", $item->sizes) as $size)
							{{ $size }}
							@endforeach
							@endif
						</span>
						<span class="products__price">{{ number_format($item->price, 0,","," ") }}
							{{ __('translation.soum') }}</span>
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
					<h3 class="blog__title">{{ __('translation.about_fashion_style_and_trends') }}</h3>
				</div>
			</div>

			<div class="row">
				<div class="blog__splide splide">
					<div class="splide__track">
						<ul class="splide__list">
							@foreach ($posts as $item)
							<li class="col-lg-4 col-sm-6 col-12 splide__slide">
								<div class="blog__item">
									<a href="/blog/{{ $item->id }}" class="blog__link">
										<span class="blog__image">
											<img src="{{ '/uploads/posts/' . $item->image_preview }}" alt="Blog Image">
										</span>
										<span class="blog__caption">{{ $item['title_' . app()->getLocale()] }}</span>
										<span class="blog__subtitle">
											{{ $item['mini_description_' . app()->getLocale()] }}
										</span>
									</a>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- /.blog -->

</main>

@endsection