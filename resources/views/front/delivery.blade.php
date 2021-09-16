@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/assets/styles/index.css?ver=6')}}" />

<main>
	<section class="delivery">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 offset-lg-1 col-12">
					<h3 class="delivery__title">{{ __('translation.delivery') }}</h3>
					<ul class="delivery__list">
						<li class="delivery__item">
							{{ __('translation.delivery_city') }}
						</li>
						<li class="delivery__item">
							{{ __('translation.delivery_region') }}
						</li>
						<li class="delivery__item">
							{{ __('translation.delivery_payment_method') }}
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection