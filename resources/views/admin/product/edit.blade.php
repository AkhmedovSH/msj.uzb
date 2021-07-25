@extends('admin.layout')
@section('content')

<main class="add-product">
	<section class="add-product__section">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<h1 class="add-product__title">Редактирование товара</h1>
				</div>
			</div>

			<form action="#!" method="#!" class="add-product__form row">

				<div class="col-lg-3 col-md-6 col-12">
					<select name="section" class="add-product__select">
						<option value="" selected disabled>Выберите раздел:</option>
						<option value="for-women">Для женщин</option>
						<option value="for-men">Для мужчин</option>
						<option value="for-girls">Для девочек</option>
						<option value="for-boys">Для мальчиков</option>
					</select>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<select name="category" class="add-product__select add-product__select--trigger">
						<option value="" disabled>Выберите категорию:</option>
						<option selected value="clothes">Одежда</option>
						<option value="shoes">Обувь</option>
					</select>
				</div>
				<!-- Подкатегория менятся в зависимости от выбора категории. При добавлении новых категорий value должны совпадать с data-target -->
				<div class="col-lg-3 col-md-6 col-12 add-product__select-subcategory add-product__select-subcategory--active" data-target="clothes">
					<select name="subcategory" class="add-product__select">
						<option value="" selected disabled>Выберите подкатегорию:</option>
						<option value="clothes">Костюмы</option>
						<option value="shoes">Платья</option>
						<option value="shoes">Юбки</option>
					</select>
				</div>
				<div class="col-lg-3 col-md-6 col-12 add-product__select-subcategory" data-target="shoes">
					<select name="subcategory" class="add-product__select">
						<option value="" selected disabled>Выберите подкатегорию:</option>
						<option value="clothes">Летняя обувь</option>
						<option value="shoes">Спортивная</option>
						<option value="shoes">Зимняя</option>
						<option value="shoes">Туфли</option>
					</select>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<select name="brand" class="add-product__select">
						<option value="" selected disabled>Выберите бренд:</option>
						<option value="clothes">H4</option>
						<option value="shoes">Eurofashion</option>
						<option value="shoes">Speedway</option>
						<option value="shoes">Redesign</option>
					</select>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Название товара
						<input type="text" name="product-name" class="add-product__input">
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Цена
						<input type="number" name="product-price" class="add-product__input">
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Характеристики
						<textarea name="characteristics" class="add-product__input"></textarea>
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Описание
						<textarea name="description" class="add-product__input"></textarea>
					</label>
				</div>

				<div class="col-12">
					<span class="add-product__text">Размеры:</span>
					<ul class="add-product__list">
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								XS
								<input type="checkbox" name="sizes[]" value="xs" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								S
								<input type="checkbox" name="sizes[]" value="s" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								M
								<input type="checkbox" name="sizes[]" value="m" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								XS
								<input type="checkbox" name="sizes[]" value="xs" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								S
								<input type="checkbox" name="sizes[]" value="s" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								M
								<input type="checkbox" name="sizes[]" value="m" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
					</ul>
					<a href="../all-sizes.php" class="add-product__link">Редактировать</a>
				</div>

				<div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Таблицы размеров)
						<input type="file" name="table-size-image" class="add-product__input">
					</label>
				</div>

				<div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Вертикальной ориентации)
						<input type="file" multiple name="product_images[]" class="add-product__input">
					</label>
				</div>

			</form>
		</div>
	</section>
</main>

@endsection