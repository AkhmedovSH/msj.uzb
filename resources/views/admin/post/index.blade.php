@extends('admin.layout')
@section('content')

<main>
	<section class="brands categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0 d-flex align-items-center">
					<h1 class="categories__title categories__title--left">Все посты</h1>
					<div class="subcategories__form categories__form form">
						<a href="/admin/post/create" class="categories__btn">Добавить пост</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
					@foreach($data as $item)
					<div class="categories__item">
						<span class="categories__name">{{ $item->title }}</span>
						<div class="categories__actions actions subcategories__actions">
							<form action="/admin/post/destroy/{{ $item->id }}" class="categories__form form" method="get">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="/admin/post/{{ $item->id }}/edit"  class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit" ></button>
							</form>
						</div>
					</div>
					@endforeach
				</div>
			</div>

		</div>
	</section>
</main>

@endsection