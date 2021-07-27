<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('public/assets/libs/bootstrap-grid/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/styles/admin.css')}}">
	<title>Msj Admin</title>
</head>

<body>

	<div id="app" class="wrapper">

		<header class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-1 offset-0">
						<a href="/admin" class="header__link">Все товары</a> 
						<!-- header__link--active -->
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6">
						<a href="/admin/category" class="header__link">Все категории</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-sm-0 mt-3">
						<a href="/admin/brand" class="header__link">Все бренды</a>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
						<a href="/admin/size" class="header__link">Все размеры</a>
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
	
	<script src="{{ asset('public/assets/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('public/assets/scripts/admin.js')}}"></script>
	<script src="{{ asset('public/js/app.js')}}"></script>
	
</body>
	
</html>