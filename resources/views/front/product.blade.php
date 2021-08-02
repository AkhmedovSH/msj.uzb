@extends('layout')
@section('content')

<main>
	<section class="product">
		<div class="container-fluid">
			<div class="row">

				<div class="col-xl-8 col-lg-7 col-md-8 col-sm-10 offset-sm-1 offset-md-2 offset-lg-0">
					<div class="product-content">

						<div class="product-content__slider-wrapper product-content__slider-wrapper--active">
							<div class="product-content__slider">
								@foreach(json_decode($data->images) as $item)
								<div class="product-content__slider-item">
									<img src="{{ '/uploads/products/' . $item->image }}" alt="Product Image">
								</div>
								@endforeach
							</div>
							<button class="product-content__slider-prev"></button>
							<button class="product-content__slider-next"></button>
						</div>

					</div>
				</div>

				<div class="col-xl-4 col-lg-5 col-md-8 col-sm-10 offset-sm-1 offset-md-2 offset-lg-0">
					<div class="product__sidebar product-sidebar">

						<div class="product-sidebar__head">
							<p class="product-sidebar__title">
								{{ $data->name }}
							</p>
							<button class="product-sidebar__wishlist-btn"></button>
						</div>

						<ul class="product-sidebar__price-list">
							<li data-id="#xs-size" class="product-sidebar__price-item product-sidebar__price-item--active">{{ number_format($data->price, 0,","," ") }} сум</li>
							<li data-id="#s-size" class="product-sidebar__price-item">250 000 сум</li>
							<li data-id="#m-size" class="product-sidebar__price-item">300 000 сум</li>
							<li data-id="#l-size" class="product-sidebar__price-item">350 000 сум</li>
							<li data-id="#xl-size" class="product-sidebar__price-item">400 000 сум</li>
							<li data-id="#2xl-size" class="product-sidebar__price-item">450 000 сум</li>
						</ul>

						<!-- <div class="product-sidebar__slider-wrapper">
							<div class="product-sidebar__slider">
								<a href="product-1.php" class="product-sidebar__slider-item product-sidebar__slider-item--active">
									<img src="/assets/img/product/1.jpg" alt="Product Image">
								</a>
								<a href="product-2.php" class="product-sidebar__slider-item">
									<img src="/assets/img/product/9.jpg" alt="Product Image">
								</a>
							</div>
							<button class="product-sidebar__slider-prev"></button>
							<button class="product-sidebar__slider-next"></button>
						</div> -->

						<ul class="product-sidebar__size-list">
							<li class="product-sidebar__size-item">
								<a href="#xs-size" class="product-sidebar__size-link product-sidebar__size-link--active">xs</a>
							</li>
							<li class="product-sidebar__size-item">
								<a href="#s-size" class="product-sidebar__size-link">s</a>
							</li>
							<li class="product-sidebar__size-item">
								<a href="#m-size" class="product-sidebar__size-link">m</a>
							</li>
							<li class="product-sidebar__size-item">
								<a href="#l-size" class="product-sidebar__size-link">l</a>
							</li>
							<li class="product-sidebar__size-item">
								<a href="#xl-size" class="product-sidebar__size-link">xl</a>
							</li>
							<li class="product-sidebar__size-item">
								<a href="#2xl-size" class="product-sidebar__size-link">2xl</a>
							</li>
						</ul>

						<button class="product-sidebar__size-btn">Таблица размеров</button>
						<form action="/cart" method="post">
							@csrf
							<input type="hidden" name="id" value="{{ $data->id }}">
							<input type="hidden" name="name" value="{{ $data->name }}">
							<input type="hidden" name="price" value="{{ $data->price }}">
							<button type="submit" class="product-sidebar__basket-btn">Положить в корзину</button>
						</form>
						

						<ul class="product-sidebar__info-list">
							<li class="product-sidebar__info-item"><span>Характеристики</span></li>
							<li class="product-sidebar__info-item">
								Основной материал: <span>54% вискоза, 46% хлопок</span>
							</li>
							<li class="product-sidebar__info-item">
								Подкладка: <span>100% хлопок</span>
							</li>
							<li class="product-sidebar__info-item">
								Цвет: <span>черный</span>
							</li>
							<li class="product-sidebar__info-item">
								Вид застежки: <span>кнопки, молния</span>
							</li>
							<li class="product-sidebar__info-item">
								Вырез горловины: <span>воротник-стойка</span>
							</li>
							<li class="product-sidebar__info-item">
								Длина изделия, по спинке, см: <span>56</span>
							</li>
							<li class="product-sidebar__info-item">
								Длина рукава: <span>длинные</span>
							</li>
							<li class="product-sidebar__info-item">
								Покрой: <span>широкий</span>
							</li>
							<li class="product-sidebar__info-item">
								Тип карманов: <span>прорезные</span>
							</li>
							<li class="product-sidebar__info-item">
								Ширина изделия по груди, см: <span>59</span>
							</li>
							<li class="product-sidebar__info-item">
								Ширина изделия по низу, см: <span>59</span>
							</li>
						</ul>

						<div class="product-sidebar__description">
							<p class="product-sidebar__description-title">Описание</p>
							<p class="product-sidebar__description-text">
								{{ $data->description }}
							</p>
						</div>

					</div>
				</div>

			</div>

			<div class="product-notify">
				<div class="product-notify__body">
					<p class="product-notify__text">Товар успешно добавлен в корзину</p>
					<button class="product-notify__close-btn"></button>
				</div>
			</div>


		</div>
	</section>
</main>

@endsection