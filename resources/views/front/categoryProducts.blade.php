@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/styles/index.css?ver=3')}}" />
<main>
	<section class="products products-inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h3 class="products__title">{{ $category->name }}</h3>
				</div>
			</div>
			<div class="row">

				@foreach ($data as $item)
				<div class="col-lg-3 col-sm-6 col-12 d-flex">
					<a href="{{ route('product', $item->id) }}" class="products__item">
						<span class="products__image">
							<img src="{{ '/uploads/products/' .  $item->image }}" alt="image">
						</span>
						<span class="products__name">{{ $item->name }}</span>
						<span class="products__sizes">
							@if($item->sizes)
								@foreach(explode(",", $item->sizes) as $size)
								{{ $size }}
								@endforeach
							@endif
						</span>
						<span class="products__price">{{ number_format($item->price, 0,","," ") }} сум</span>
						<button class="products__btn fav-btn"></button>
					</a>
				</div>
				@endforeach

				
			</div>

			<div class="d-flex justify-content-center my-5">
					{{ $data->links("pagination::bootstrap-4") }}
				</div>
		</div>
	</section>

	<!-- /.products -->
</main>

@endsection