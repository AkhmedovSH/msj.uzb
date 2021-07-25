@extends('admin.layout')
@section('content')

<main>
	<section class="categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<h1 class="categories__title">Выберите раздел</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2 col-md-3 col-6 offset-lg-2 offset-0">
					<a href="#for-women" class="categories__link categories__link--active tab__trigger">Для женщин</a>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<a href="#for-men" class="categories__link tab__trigger">Для мужчин</a>
				</div>
				<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
					<a href="#for-girls" class="categories__link tab__trigger">Для девочек</a>
				</div>
				<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
					<a href="#for-boys" class="categories__link tab__trigger">Для мальчиков</a>
				</div>
			</div>

			<div class="row mt-5 tab__content tab__content--active" id="for-women">
				<div class="col-lg-8 col-12 offset-lg-2 offset-0">
					<div class="categories__item">
						<span class="categories__name">Одежда</span>
						<form action="/admin/innerpages/subcategories.php" method="#!" class="actions__form form">
							<button type="submit" class="actions__btn actions__btn--secondary">Посмотреть категорию</button>
						</form>
						<div class="categories__actions actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="/admin/actions/edit-category.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
					<div class="categories__item">
						<span class="categories__name">Одежда</span>
						<form action="/admin/innerpages/subcategories.php" method="#!" class="actions__form form">
							<button type="submit" class="actions__btn actions__btn--secondary">Посмотреть категорию</button>
						</form>
						<div class="categories__actions actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="/admin/actions/edit-category.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12 offset-md-4 offset-sm-3 offset-0">
					<form action="/admin/actions/add-category.php" method="#!" class="categories__form form">
						<button type="submit" class="categories__btn">Добавить категорию</button>
					</form>
				</div>
			</div>

			<div class="row mt-5 tab__content" id="for-men">
				<div class="col-lg-8 col-12 offset-lg-2 offset-0">
					<div class="categories__item">
						<span class="categories__name">Категория для мужчин</span>
						<form action="/admin/innerpages/subcategories.php" method="#!" class="actions__form form">
							<button type="submit" class="actions__btn actions__btn--secondary">Посмотреть категорию</button>
						</form>
						<div class="categories__actions actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="/admin/actions/edit-category.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12 offset-md-4 offset-sm-3 offset-0">
					<form action="/admin/actions/add-category.php" method="#!" class="categories__form form">
						<button type="submit" class="categories__btn">Добавить категорию</button>
					</form>
				</div>
			</div>

			<div class="row mt-5 tab__content" id="for-girls">
				<div class="col-lg-8 col-12 offset-lg-2 offset-0">
					<div class="categories__item">
						<span class="categories__name">Категория для девочек</span>
						<form action="/admin/innerpages/subcategories.php" method="#!" class="actions__form form">
							<button type="submit" class="actions__btn actions__btn--secondary">Посмотреть категорию</button>
						</form>
						<div class="categories__actions actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="/admin/actions/edit-category.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12 offset-md-4 offset-sm-3 offset-0">
					<form action="/admin/actions/add-category.php" method="#!" class="categories__form form">
						<button type="submit" class="categories__btn">Добавить категорию</button>
					</form>
				</div>
			</div>

			<div class="row mt-5 tab__content" id="for-boys">
				<div class="col-lg-8 col-12 offset-lg-2 offset-0">
					<div class="categories__item">
						<span class="categories__name">Категория для мальчиков</span>
						<form action="/admin/innerpages/subcategories.php" method="#!" class="actions__form form">
							<button type="submit" class="actions__btn actions__btn--secondary">Посмотреть категорию</button>
						</form>
						<div class="categories__actions actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="/admin/actions/edit-category.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12 offset-md-4 offset-sm-3 offset-0">
					<form action="/admin/actions/add-category.php" method="#!" class="categories__form form">
						<button type="submit" class="categories__btn">Добавить категорию</button>
					</form>
				</div>
			</div>

		</div>
	</section>
</main>

@endsection