@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/styles/blog-inner.css')}}" />


<main>

	<section class="banner" style="background-image: url('{{ asset('/uploads/posts/' . $data->image_preview_inner) }}')">
		<div class="banner__label">
			<p class="banner__text">
				{{ $data['title_' . app()->getLocale()] }}
			</p>
		</div>
	</section>

	{{-- <section class="desc">
		<div class="container-fluid">
			<p class="desc__text">
				{{ $data['mini_description_' . app()->getLocale()] }}
			</p>
		</div>
	</section> --}}

	@if($data->block_1_subtitle_ru)
	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">{{ $data['block_1_subtitle_' . app()->getLocale()] }}</h2>
			<p class="info__text">
				{{ $data['block_1_description_' . app()->getLocale()] }}
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ '/uploads/posts/' . $data->block_1_image }}">
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	@if($data->block_2_subtitle_ru)
	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">{{ $data['block_2_subtitle_' . app()->getLocale()] }}</h2>
			<p class="info__text">
				{{ $data['block_2_description_' . app()->getLocale()] }}
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ '/uploads/posts/' . $data->block_2_image }}">
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	@if($data->block_3_subtitle_ru)
	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">{{ $data['block_3_subtitle_' . app()->getLocale()] }}</h2>
			<p class="info__text">
				{{ $data['block_3_description_' . app()->getLocale()] }}
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ '/uploads/posts/' . $data->block_3_image }}">
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	@if($data->block_4_subtitle_ru)
	<section class="info">
		<div class="container-fluid">
			<h2 class="info__title">{{ $data['block_4_subtitle_' . app()->getLocale()] }}</h2>
			<p class="info__text">
				{{ $data['block_4_description_' . app()->getLocale()] }}
			</p>
			<div class="row">
				<div class="col-12 px-sm-3 px-0">
					<div class="info__image">
						<img src="{{ '/uploads/posts/' . $data->block_4_image }}">
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

</main>

@endsection