@extends('admin.layout')
@section('content')

<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 col-lg-6 col-md-8 col-12 offset-xl-2 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Добавить пост</h1>
					<form action="/admin/post" method="post" class="categories__form form" autocomplete="off" enctype="multipart/form-data">
						@csrf
						<input type="text" placeholder="Введите заголовок" name="title" class="categories__input add-product__label" required>

						<input type="text" placeholder="Введите мини описание" name="subtitle" class="categories__input add-product__label">

						<label class="add-product__label">
							Описание
							<textarea name="description" id="my-editor" cols="30" rows="10" class="form-control add-product__label"></textarea>
						</label>

						<label class="add-product__label">
							Добавление фото
							<input type="file" class="add-product__input" name="image">
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