@extends('layouts.categorymaster')
@section('title', 'SchoolKids')
@section('image')
<img src="./images/offers/ks.jpg" width="100%" height="60%"/>
@endsection
@section('brands')
			<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                @foreach($mobile as $mob)
									<li><a href="#">{{$mob->company_name}}</a></li>
								@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
 @endsection  
 @section('features')
 <h2>Features</h2>
 	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                             @foreach($mobile as $mob)
					
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">{{$mob->features}}</a></h4>
								</div>
							</div>
                    
                            @endforeach
                                    </div>
                                    
							<!--/category-products-->
				
 @endsection    
  @section('products')
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">School</h2>
                        @foreach($mobile as $mob)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
											<img src="./images/categories/{{$mob->image_url}}" />
											<h2>Rs {{$mob->price}}</h2>
											<p>{{$mob->company_name}} ,{{$mob->model_name}}</p>
											<p>{{$mob->description}}</p>

											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									</ul>
								</div>
							</div>
						</div>
                        @endforeach
					
							</div>
						</div>
						
					</div><!--features_items-->
				
 @endsection      
 @section('recommend')
 
					
 @endsection                   
						