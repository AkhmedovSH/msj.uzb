@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/styles/blog-inner.css')}}" />


<main>
	<section class="banner" style="background-image: url('{{ asset('/uploads/posts/' . $data->image) }}')">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h1 class="banner__title">
						{{ $data->title }}
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- /.banner -->

	<section class="info">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-12">
					{!! $data->description !!}
				</div>
			</div>
		</div>
	</section>
	<!-- /.info -->

</main>

@endsection