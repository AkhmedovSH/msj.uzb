@extends('admin.layout')
@section('content')

<main>
	<section class="categories add-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 col-lg-6 col-md-8 col-12 offset-xl-2 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Добавить статью</h1>
					<form action="/admin/post" method="post" class="categories__form form" autocomplete="off"
						enctype="multipart/form-data">
						@csrf

						<h2 class="categories__title categories__title--left" style="color: #000">
							Заполнение внешней карточки
						</h2>
						<label class="add-product__label mb-4">
							Добавление фотографии (превью)
							<input type="file" class="add-product__input" name="image_preview">
						</label>
						<label class="add-product__label mb-4">
							Введите заголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="title_ru">
						</label>
						<label class="add-product__label mb-4">
							Введите заголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="title_uz">
						</label>
						<label class="add-product__label mb-4">
							Мини описание (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="mini_description_ru">
						</label>
						<label class="add-product__label mb-4">
							Мини описание (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="mini_description_uz">
						</label>
						<label class="add-product__label mb-4">
							Превью внутренней страницы
							<input type="file" class="add-product__input" name="image_preview_inner">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (1)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_1_subtitle_ru">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_1_subtitle_uz">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input" name="block_1_description_ru"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input" name="block_1_description_uz"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (1)
							<input type="file" class="add-product__input" name="block_1_image">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (2)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_2_subtitle_ru">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_2_subtitle_uz">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input" name="block_2_description_ru"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input" name="block_2_description_uz"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (2)
							<input type="file" class="add-product__input" name="block_2_image">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (3)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_3_subtitle_ru">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_3_subtitle_ru">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input" name="block_3_description_ru"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input" name="block_3_description_ru"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (3)
							<input type="file" class="add-product__input" name="block_3_image">
						</label>

						<h2 class="categories__title categories__title--left" style="color: #000">
							Блок (4)
						</h2>
						<label class="add-product__label mb-4">
							Подзаголовок (Ru)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_4_subtitle_ru">
						</label>
						<label class="add-product__label mb-4">
							Подзаголовок (Uz)
							<input type="text" placeholder="Введите текст" class="add-product__input" name="block_4_subtitle_ru">
						</label>

						<label class="add-product__label mb-4">
							Описание (Ru)
							<textarea class="add-product__input" name="block_4_description_ru"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Описание (Uz)
							<textarea class="add-product__input" name="block_4_description_ru"></textarea>
						</label>
						<label class="add-product__label mb-4">
							Фотография к блоку (4)
							<input type="file" class="add-product__input" name="block_4_image">
						</label>

						<div class="categories__btn-wrapper">
							<button type="submit" name="save-category" class="categories__btn">Опубликовать</button>
							<a href="/admin/post" class="categories__btn">Отмена</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection