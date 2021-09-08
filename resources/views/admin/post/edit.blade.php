@extends('admin.layout')
@section('content')

<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 col-lg-6 col-md-8 col-12 offset-xl-2 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Редактировать статью</h1>
					<form action="/admin/post/update/{{ $data->id }}" method="post" class="categories__form form"
						autocomplete="off" enctype="multipart/form-data">
						@csrf

						<h2 class="categories__title categories__title--left" style="color: #000">
							Заполнение внешней карточки
						</h2>
						<label class="add-product__label mb-4">
							Добавление фотографии (превью)
							<input type="file" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Введите заголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Введите заголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Мини описание (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Мини описание (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Превью внутренней страницы
							<input type="file" class="add-product__input">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (1)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (1)
							<input type="file" class="add-product__input">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (2)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (2)
							<input type="file" class="add-product__input">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (3)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (3)
							<input type="file" class="add-product__input">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (4)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (4)
							<input type="file" class="add-product__input">
						</label>

						<div class="categories__btn-wrapper">
							<button type="submit" name="save-category" class="categories__btn">Сохранить</button>
							<a href="/admin/post" class="categories__btn">Отмена</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection