<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-grid/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/styles/admin.css')}}">
	<title>Msj Admin</title>
</head>

<body>

	<div class="wrapper">

		<header class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-1 offset-0">
						<a href="/admin/all-products" class="header__link header__link--active">Все товары</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6">
						<a href="/admin/all-categories" class="header__link">Все категории</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-sm-0 mt-3">
						<a href="/admin/all-brands" class="header__link">Все бренды</a>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
						<a href="/admin/all-sizes" class="header__link">Все размеры</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-12 mt-lg-0 mt-3">
						<a href="/" class="header__link">Выйти</a>
					</div>
				</div>
			</div>
		</header>

		@yield('content')
		
	</div>
	<!-- /.wrapper -->
	
	<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/scripts/admin.js')}}"></script>
	
</body>
	
</html>