@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/styles/blog-inner.css')}}" />


<main>

	<section class="banner" style="background-image: url('{{ asset('assets/img/blog/blog-1/banner.jpg') }}')">
		<div class="banner__label">
			<p class="banner__text">
				4 главные вещи в летнем гардеробе
			</p>
		</div>
	</section>

	<section class="desc">
		<div class="container-fluid">
			<p class="desc__text">
				Что обязательно должно оказаться в стильном женском гардеробе этим летом?
				Отвечают эксперты MSJ! Проанализировав модные показы сезона весна-лето 2021 и самые актуальные стрит-луки,
				удалось выяснить, на какие шорты, платья, футболки и брюки стоит обратить внимание прямо сейчас.
			</p>
		</div>
	</section>

	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">Шорты с высокой посадкой</h2>
			<p class="info__text">
				Такая модель выгодно подчеркнёт талию и визуально удлинит ноги. В зависимости от выбора цвета и фактуры, эти
				шорты можно надевать на прогулки, на пляж и даже в офис! Деним отлично подойдет для активного отдыха,
				а сдержанный хлопковый вариант будет прекрасно смотреться в паре с элегантным пиджаком.
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ asset('assets/img/blog/blog-1/1.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">Шорты с высокой посадкой</h2>
			<p class="info__text">
				Такая модель выгодно подчеркнёт талию и визуально удлинит ноги. В зависимости от выбора цвета и фактуры, эти
				шорты можно надевать на прогулки, на пляж и даже в офис! Деним отлично подойдет для активного отдыха,
				а сдержанный хлопковый вариант будет прекрасно смотреться в паре с элегантным пиджаком.
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ asset('assets/img/blog/blog-1/1.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">Шорты с высокой посадкой</h2>
			<p class="info__text">
				Такая модель выгодно подчеркнёт талию и визуально удлинит ноги. В зависимости от выбора цвета и фактуры, эти
				шорты можно надевать на прогулки, на пляж и даже в офис! Деним отлично подойдет для активного отдыха,
				а сдержанный хлопковый вариант будет прекрасно смотреться в паре с элегантным пиджаком.
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ asset('assets/img/blog/blog-1/1.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">Шорты с высокой посадкой</h2>
			<p class="info__text">
				Такая модель выгодно подчеркнёт талию и визуально удлинит ноги. В зависимости от выбора цвета и фактуры, эти
				шорты можно надевать на прогулки, на пляж и даже в офис! Деним отлично подойдет для активного отдыха,
				а сдержанный хлопковый вариант будет прекрасно смотреться в паре с элегантным пиджаком.
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ asset('assets/img/blog/blog-1/1.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

@endsection