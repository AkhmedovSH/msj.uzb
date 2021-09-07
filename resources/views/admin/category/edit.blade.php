@extends('admin.layout')
@section('content')

<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Редактирование</h1>
					<form action="/admin/category/update/{{ $category->id }}" method="post" class="categories__form form" autocomplete="off">
						@csrf
						<input type="text" placeholder="Введите название ru" name="name_ru" value="{{ $category->name_ru }}" class="categories__input mb-4" required>
						<input type="text" placeholder="Введите название uz" name="name_uz" value="{{ $category->name_uz }}" class="categories__input" required>
						<div class="categories__btn-wrapper">
							<button type="submit" name="update-category" class="categories__btn">Обновить</button>
							<a href="/admin/category" class="categories__btn">Отмена</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection