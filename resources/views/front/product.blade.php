@extends('layout')
@section('content')

<main>
	<section class="product">
		<div class="container-fluid">
			<div class="row">

				<div class="col-xl-8 col-lg-7 col-md-8 col-sm-10 offset-sm-1 offset-md-2 offset-lg-0">
					<div class="product-content">

						<div class="product-content__slider-wrapper product-content__slider-wrapper--active">
							<div class="product-content__slider" id="lightgallery">
								@if($data->images)
									@foreach(json_decode($data->images) as $item)
									<a href="{{ '/uploads/products/' . $item->image }}" class="product-content__slider-item">
										<img src="{{ '/uploads/products/' . $item->image }}" alt="">
									</a>
									@endforeach
								@endif
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
								{{ $data['name_' . app()->getLocale()] }}
							</p>
							<button class="product-sidebar__wishlist-btn"></button>
						</div>

						<ul class="product-sidebar__price-list">
							<li class="product-sidebar__price-item product-sidebar__price-item--active">{{ number_format($data->price, 0,","," ") }} сум</li>
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
							@if($data->sizes)
								@foreach(explode(",", $data->sizes) as $key => $size)
								<li class="product-sidebar__size-item">
									<a class="product-sidebar__size-link 
										{{ $key == 0 ? 'product-sidebar__size-link--active' : ''}}" 
										onclick="setSize({{ json_encode($size) }})"
									>
									{{ $size }}
								</a>
								</li>
								@endforeach
							@endif
						</ul>

						@if($data->size_image)
						<button class="product-sidebar__size-btn">{{ __('translation.table_size') }}</button>
						@endif
						<form action="/cart" method="post">
							@csrf
							<input type="hidden" name="id" value="{{ $data->id }}">
							<input type="hidden" name="name" value="{{ $data->name_ru }}">
							<input type="hidden" name="price" value="{{ $data->price }}">
							<input type="hidden" name="size" id="size" value="">
							<button type="submit" class="product-sidebar__basket-btn">{{ __('translation.put_to_card') }}</button>
						</form>
						

						<ul class="product-sidebar__info-list">
							<p class="product-sidebar__description-title">{{ __('translation.characteristics_title') }}</p>
							<li class="product-sidebar__info-item"><span>
								{!! $data['characteristics_' . app()->getLocale()] !!}
							</span>
						</li> 
							
						</ul>

						<div class="product-sidebar__description">
							<p class="product-sidebar__description-title">{{ __('translation.desc_title') }}</p>
							<p class="product-sidebar__description-text">
								{!! $data['description_' . app()->getLocale()] !!}
							</p>
						</div>

					</div>
				</div>

			</div>

			<div class="product-notify">
				<div class="product-notify__body">
					<p class="product-notify__text">{{ __('translation.successfully_added_to_basket') }}</p>
					<button class="product-notify__close-btn"></button>
				</div>
			</div>
			<div class="modal sizes-modal">
				<div class="modal__body">
					<div class="modal__image">
						<img src="{{ '/uploads/products/' . $data->size_image }}" alt="Table of sizes">
					</div>
					<button class="modal__close-btn sizes-modal-close"></button>
				</div>
			</div>


		</div>
	</section>
</main>

@endsection