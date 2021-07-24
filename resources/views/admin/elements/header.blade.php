<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="/assets/libs/bootstrap-grid/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/assets/styles/admin.css">
	<title><?php echo $title ?></title>
</head>

<body>

	<div class="wrapper">

		<header class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-1 offset-0">
						<a href="/admin/all-products.php" class="header__link <?= $page == 'all-products' ? 'header__link--active' : null ?>">Все товары</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6">
						<a href="/admin/all-categories.php" class="header__link <?= $page == 'all-categories' ? 'header__link--active' : null ?>">Все категории</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-sm-0 mt-3">
						<a href="/admin/all-brands.php" class="header__link <?= $page == 'all-brands' ? 'header__link--active' : null ?>">Все бренды</a>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
						<a href="/admin/all-sizes.php" class="header__link <?= $page == 'all-sizes' ? 'header__link--active' : null ?>">Все размеры</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-12 mt-lg-0 mt-3">
						<a href="#!" class="header__link">Выйти</a>
					</div>
				</div>
			</div>
		</header>