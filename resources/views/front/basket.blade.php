@extends('layout')
@section('content')

<main>
	<section class="basket">
		<div class="container-fluid">

			<div class="basket__heading-row row">
				<div class="col-2 offset-lg-1">
					<h4 class="basket__heading basket__product">{{ __('translation.b_product') }}</h4>
				</div>
				<div class="col-lg-2 col-3">
					<h4 class="basket__heading basket__description">{{ __('translation.b_description') }}</h4>
				</div>
				<div class="col-2">
					<h4 class="basket__heading basket__price">{{ __('translation.b_price') }}</h4>
				</div>
				<div class="col-2">
					<h4 class="basket__heading basket__count">{{ __('translation.b_count') }}</h4>
				</div>
				<div class="col-2">
					<h4 class="basket__heading basket__total">{{ __('translation.b_total') }}</h4>
				</div>
			</div>

			@foreach (Cart::content() as $item)
			<div class="basket__item-row row">
				<div class="col-md-2 col-sm-4 col-6 offset-lg-1">
					<div class="basket__item basket__product">
						<div class="basket__product-image">
							<span class="basket__heading basket__heading-hidden">{{ __('translation.b_product') }}</span>
							<img src="/uploads/products/{{$item->model->image}}" alt="image">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<p class="basket__item basket__description basket__description-text">
						<span class="basket__heading basket__heading-hidden">{{ __('translation.b_description') }}</span>
						{{ $item->model->name }}
					</p>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<p class="basket__item basket__price basket__price-label">
						<span class="basket__heading basket__heading-hidden">{{ __('translation.b_price') }}</span>
						{{ number_format($item->model->price, 0,","," ") }}
					</p>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<span class="basket__heading basket__heading-hidden">{{ __('translation.b_count') }}</span>
					<div class="basket__item basket__count basket__count-box">
					<select class="select--ys show-qty quantity" data-id="{{$item->rowId}}">
							<option {{ $item->qty == 1 ? 'selected' : ''}}>1</option>
							<option {{ $item->qty == 2 ? 'selected' : ''}}>2</option>
							<option {{ $item->qty == 3 ? 'selected' : ''}}>3</option>
							<option {{ $item->qty == 4 ? 'selected' : ''}}>4</option>
							<option {{ $item->qty == 5 ? 'selected' : ''}}>5</option>
							<option {{ $item->qty == 10 ? 'selected' : ''}}>10</option>
					</select>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<p class="basket__item basket__total basket__total-label">
						<span class="basket__heading basket__heading-hidden">{{ __('translation.b_total') }}</span>
						{{ number_format(($item->model->price * $item->qty), 0,","," ") }}
					</p>
				</div>
				<div class="col-md-1 col-sm-4 col-6">
					<form action="{{route('cart.destroy',$item->rowId)}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="basket__delete-btn"></button>
					</form>
				</div>
			</div>
			@endforeach

			<div class="basket__total-row row">
				<div class="col-12">
					<div class="basket__total-text">{{ __('translation.b_main_total') }}<span>{{ Cart::subtotal(0, 0, ' ') }} {{ __('translation.soum') }}</span></div>
					<a href="{{ route('order') }}" class="basket__total-btn">{{ __('translation.go_to_ordering') }}</a>
				</div>
			</div>

		</div>
	</section>
</main>

@endsection