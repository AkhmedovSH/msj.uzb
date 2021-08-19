<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('/assets/libs/bootstrap-grid/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/styles/admin.css')}}">
	<title>Msj Admin</title>
</head>

<body>

	<div id="app" class="wrapper">

		<header class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-6">
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
					<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
						<a href="/admin/post" class="header__link">Посты</a>
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
	
	<script src="{{ asset('/assets/libs/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('/assets/scripts/admin.js')}}"></script>
	<script src="{{ asset('/js/app.js?ver=3')}}"></script>

	<script src="/plugins/ckeditor/ckeditor.js"></script>
	<script src="/plugins/ckfinder/ckfinder.js"></script>
	<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
	</script>
	<script>
			$("textarea").each(function(){
					CKEDITOR.replace('my-editor', options);
			});
	</script>
</body>
	
</html>