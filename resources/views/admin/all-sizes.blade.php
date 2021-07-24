<?php
$title = 'Все размеры';
$page = 'all-sizes';
include "elements/header.php";
?>

<main>
	<section class="sizes categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<h1 class="categories__title">Выберите раздел</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-2 col-lg-3 col-md-4 col-6 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<a href="#clothes" class="categories__link categories__link--active tab__trigger">Одежда</a>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<a href="#shoes" class="categories__link tab__trigger">Обувь</a>
				</div>
			</div>

			<div class="row tab__content tab__content--active" id="clothes">
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">XS</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>

			</div>

			<div class="row tab__content" id="shoes">
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<div class="sizes__item">
						<span class="sizes__text">42</span>
						<form action="#!" method="#!" class="sizes__form form">
							<button type="submit" name="delete-size" class="sizes__delete-btn"></button>
						</form>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-12 offset-lg-4 offset-md-3 offset-sm-2">
					<form action="/admin/actions/add-size.php" method="#!" class="sizes__form form add-size-form">
						<!-- clothes - Значение по умолчанию -->
						<input type="hidden" value="clothes" name="where-to-add">
						<button type="submit" class="sizes__btn">Добавить размер</button>
					</form>
				</div>
			</div>

		</div>
	</section>
</main>

<?php include "elements/footer.php" ?>