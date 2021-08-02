@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/styles/blog-inner.css')}}" />
<main>
	<section class="blog outer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h3 class="blog__title">О моде, стиле и трендах</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="blog__item">
						<a d="innerpages/blog/blog-1.php" class="blog__link">
							<span class="blog__image">
								<img src="/assets/img/blog/blog-1.jpg" alt="Blog Preview Image">
							</span>
							<span class="blog__caption">4 главные вещи в летнем гардеробе</span>
							<span class="blog__subtitle">
								Что обязательно должно оказаться в стильном женском гардеробе этим летом?
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="blog__item">
						<a d="innerpages/blog/blog-1.php" class="blog__link">
							<span class="blog__image">
								<img src="/assets/img/blog/blog-2.jpg" alt="Blog Preview Image">
							</span>
							<span class="blog__caption">Какую одежду купить ребенку на лето?</span>
							<span class="blog__subtitle">
								Составляем список
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="blog__item">
						<a d="innerpages/blog/blog-1.php" class="blog__link">
							<span class="blog__image">
								<img src="/assets/img/blog/blog-3.jpg" alt="Blog Preview Image">
							</span>
							<span class="blog__caption">Собираемся в отпуск!</span>
							<span class="blog__subtitle">
								Что должно оказаться
								в чемодане?
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="blog__item">
						<a d="innerpages/blog/blog-1.php" class="blog__link">
							<span class="blog__image">
								<img src="/assets/img/blog/blog-4.jpg" alt="Blog Preview Image">
							</span>
							<span class="blog__caption">Выбираем платье для пикника!</span>
							<span class="blog__subtitle">
								4 стильных варианта
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="blog__item">
						<a d="innerpages/blog/blog-1.php" class="blog__link">
							<span class="blog__image">
								<img src="/assets/img/blog/blog-5.jpg" alt="Blog Preview Image">
							</span>
							<span class="blog__caption">Как носить джоггеры?</span>
							<span class="blog__subtitle">
								3 совета для мужчин
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="blog__item">
						<a d="innerpages/blog/blog-1.php" class="blog__link">
							<span class="blog__image">
								<img src="/assets/img/blog/blog-6.jpg" alt="Blog Preview Image">
							</span>
							<span class="blog__caption">Что носить на пляже?</span>
							<span class="blog__subtitle">
								5 мужских комплектов с шортами
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection