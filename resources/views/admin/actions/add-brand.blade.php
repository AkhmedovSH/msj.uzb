<?php
$title = 'Добавить бренд';
$page = 'all-brands';
include "../elements/header.php";
?>

<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Добавить бренд</h1>
					<form action="#!" method="#!" class="categories__form form">
						<input type="text" placeholder="Введите название" name="brand-name" class="categories__input" required>
						<select name="brand-section" class="brands__input">
							<option value="">Выберите раздел</option>
							<option value="">Раздел 1</option>
							<option value="">Раздел 2</option>
						</select>
						<div class="categories__btn-wrapper">
							<button type="submit" class="categories__btn">Сохранить</button>
							<a href="../all-brands.php" class="categories__btn">Отмена</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include "../elements/footer.php" ?>