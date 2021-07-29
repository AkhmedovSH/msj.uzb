@extends('layout')
@section('content')

<main>
	<section class="basket">
		<div class="container-fluid">

			<div class="basket__heading-row row">
				<div class="col-2 offset-lg-1">
					<h4 class="basket__heading basket__product">Товар</h4>
				</div>
				<div class="col-lg-2 col-3">
					<h4 class="basket__heading basket__description">Описание</h4>
				</div>
				<div class="col-2">
					<h4 class="basket__heading basket__price">Цена за шт.</h4>
				</div>
				<div class="col-2">
					<h4 class="basket__heading basket__count">Количество</h4>
				</div>
				<div class="col-2">
					<h4 class="basket__heading basket__total">Итого</h4>
				</div>
			</div>

			@foreach (Cart::content() as $item)
			<div class="basket__item-row row">
				<div class="col-md-2 col-sm-4 col-6 offset-lg-1">
					<div class="basket__item basket__product">
						<div class="basket__product-image">
							<span class="basket__heading basket__heading-hidden">Товар</span>
							<img src="/uploads/products/{{$item->model->image}}" alt="image">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<p class="basket__item basket__description basket__description-text">
						<span class="basket__heading basket__heading-hidden">Описание</span>
						{{ $item->model->name }}
					</p>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<p class="basket__item basket__price basket__price-label">
						<span class="basket__heading basket__heading-hidden">Цена за шт.</span>
						{{ $item->model->price }}
					</p>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<span class="basket__heading basket__heading-hidden">Количество</span>
					<div class="basket__item basket__count basket__count-box">
						<button class="basket__count-btn basket__count-btn--minus"></button>
						<p class="basket__count-text">{{ $item->qty }}</p>
						<button class="basket__count-btn basket__count-btn--plus"></button>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<p class="basket__item basket__total basket__total-label">
						<span class="basket__heading basket__heading-hidden">Итого</span>
						{{ $item->model->price * $item->qty }}
					</p>
				</div>
				<div class="col-md-1 col-sm-4 col-6">
					<button class="basket__delete-btn"></button>
				</div>
			</div>
			@endforeach

			<div class="basket__total-row row">
				<div class="col-12">
					<div class="basket__total-text">Общая сумма: <span>{{ Cart::subtotal(0, 0, ' ') }} сум</span></div>
					<a href="{{ route('order') }}" class="basket__total-btn">Перейти к оформлению</a>
				</div>
			</div>

		</div>
	</section>
</main>

@endsection