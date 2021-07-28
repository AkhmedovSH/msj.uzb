@extends('layout')
@section('content')

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
</main>

@endsection