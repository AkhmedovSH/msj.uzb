<?php
$title = 'Подкатегория одежда';
$page = 'all-categories';
include "../elements/header.php";
?>

<main>
	<section class="categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0 d-flex align-items-center">
					<h1 class="categories__title categories__title--left">Одежда</h1>
					<form action="/admin/actions/add-subcategory.php" method="#!" class="subcategories__form categories__form form">
						<button type="submit" class="categories__btn">Добавить подкатегорию</button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
					<div class="categories__item">
						<span class="categories__name">Платья</span>
						<div class="categories__actions actions subcategories__actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="../actions/edit-subcategory.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
					<div class="categories__item">
						<span class="categories__name">Юбки</span>
						<div class="categories__actions actions subcategories__actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<form action="../actions/edit-subcategory.php" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--edit"></button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
</main>

<?php include "../elements/footer.php" ?>