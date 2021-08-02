@extends('admin.layout')
@section('content')

<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Добавить категорию</h1>
					<form action="/admin/category/child/store" method="post" class="categories__form form" autocomplete="off">
						@csrf
						<input type="text" placeholder="Введите название" name="name" class="categories__input" required>
						<input type="hidden" name="parent_id" class="categories__input" value="{{ $id }}" required>
						<div class="categories__btn-wrapper">
							<button type="submit" name="save-category" class="categories__btn">Сохранить</button>
							<a href="{{ route('subcategory.index', $id) }}" class="categories__btn">Отмена</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection