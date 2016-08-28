@extends('layouts.master')

@section('content')
@yield('image')


	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
@yield('brands')
@yield('features')

					</div>
				</div>
				
@yield('products')
@include('includes.recommendeditems')
					
					
					
				</div>
			</div>
		</div>
	</section>

@endsection