@extends('admin.layout')
@section('content')

<main>
	<section class="products">
		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-1 offset-0">
					<form action="/admin/actions/add-product.php" method="#!" class="products__form form">
						<button type="submit" name="add-product" class="products__btn">Добавить товар</button>
					</form>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-4 offset-md-3 offset-0">
					<form action="#!" method="#!" class="products__form form">
						<button type="submit" name="hide-products" class="products__btn hide-modal__btn">Скрыть товары</button>
					</form>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-0 mt-3">
					<form action="#!" method="#!" class="products__form form">
						<button type="submit" name="delete-products" class="products__btn delete-modal__btn">Удалить</button>
					</form>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-lg-10 col-12 offset-lg-1">

					<div class="products__item">
						<form action="#!" method="#!" class="products__form form">
							<input type="checkbox" checked name="current-product" class="products__input products__input-checkbox">
						</form>
						<a href="#!" class="products__link">
							<span class="products__image">
								<img src="/assets/img/product/1.jpg" alt="Product Image">
							</span>
							<span class="products__name">Ветровка женская с классическими брюками</span>
						</a>
						<div class="products__actions actions">
							<!-- Класс для переключения состояния - visible / invisible -->
							<form action="#!" method="#!" class="actions__form visible">
								<button type="submit" name="hide-product" class="actions__btn actions__btn--visible hide-modal__btn"></button>
								<span class="actions__text actions__text--visible">Скрыть с сайта</span>
								<span class="actions__text actions__text--invisible">Вернуть на сайт</span>
							</form>
							<form action="/admin/actions/edit-product.php" method="#!" class="actions__form">
								<button type="submit" name="edit-product" class="actions__btn actions__btn--edit"></button>
								<span class="actions__text">Ред-ть</span>
							</form>
							<form action="#!" method="#!" class="actions__form">
								<button type="submit" name="delete-product" class="actions__btn actions__btn--delete delete-modal__btn"></button>
								<span class="actions__text">Удалить</span>
							</form>
						</div>
					</div>

					<div class="products__item">
						<form action="#!" method="#!" class="products__form form">
							<input type="checkbox" name="current-product" class="products__input products__input-checkbox">
						</form>
						<a href="#!" class="products__link">
							<span class="products__image">
								<img src="/assets/img/product/1.jpg" alt="Product Image">
							</span>
							<span class="products__name">Ветровка женская с классическими брюками</span>
						</a>
						<div class="products__actions actions">
							<!-- Класс для переключения состояния - visible / invisible -->
							<form action="#!" method="#!" class="actions__form invisible">
								<button type="submit" name="hide-product" class="actions__btn actions__btn--visible hide-modal__btn"></button>
								<span class="actions__text actions__text--visible">Скрыть с сайта</span>
								<span class="actions__text actions__text--invisible">Вернуть на сайт</span>
							</form>
							<form action="/admin/actions/edit-product.php" method="#!" class="actions__form">
								<button type="submit" name="edit-product" class="actions__btn actions__btn--edit"></button>
								<span class="actions__text">Ред-ть</span>
							</form>
							<form action="#!" method="#!" class="actions__form">
								<button type="submit" name="delete-product" class="actions__btn actions__btn--delete delete-modal__btn"></button>
								<span class="actions__text">Удалить</span>
							</form>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

</main>

@endsection