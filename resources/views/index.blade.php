@extends('layouts.master')
@section('title')
EasyBuy
@endsection
@section('content')
	<section id="slider"><!--slider-->
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
              	<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
              	<li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
              	<li data-target="#slider-carousel" data-slide-to="7"></li>
							<li data-target="#slider-carousel" data-slide-to="8"></li>
              	<li data-target="#slider-carousel" data-slide-to="9"></li>
							<li data-target="#slider-carousel" data-slide-to="10"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
									<img src="./images/offers/clothing.jpg" class="img-responsive" alt="Clothing"  width="93%" height="100%"/>
								</div>
							<div class="item">
									<img src="./images/offers/hd1.jpg" class="img-responsive" alt="Hard Disk"  width="93%" height="100%"/>
							</div>
							
							<div class="item">
							<img src="./images/offers/bb.jpg" class="img-responsive" alt="Books"  width="93%" height="100%"/>
							</div>

              	<div class="item">
							<img src="./images/offers/mensun.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

              

              	<div class="item">
							<img src="./images/offers/shavers.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

              	<div class="item">
							<img src="./images/offers/speaker.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

              	<div class="item">
							<img src="./images/offers/womens.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

              	<div class="item">
							<img src="./images/offers/womenclothes1.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

              	<div class="item">
							<img src="./images/offers/jewellery.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

              	<div class="item">
							<img src="./images/offers/mensfootwear.jpg" class="img-responsive" alt=""  width="93%" height="100%"/>
							</div>

							
						</div>


          </div>
					

	</section><!--/slider-->

	@include('includes.slider')

@endsection