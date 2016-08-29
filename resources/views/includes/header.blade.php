<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>18002007272</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> support@easybuy.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
							<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if (Auth::guest())
								<li><a href="{{url('/forums')}}"><i class="fa fa-crosshairs"></i> Forum</a></li>
								<li><a href="{{url('/wishlist')}}"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                @else
								<li><a href="{{url('/forums')}}"><i class="fa fa-crosshairs"></i> Forum</a></li>
								<li><a href="{{url('/wishlist')}}"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="{{url('/account')}}"><i class="fa fa-user"></i>  Account</a></li>
						    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">  
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
						@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{route('home')}}" ><i class="fa fa-shopping-cart fa-2x"></i><span 
                            style="font-size:30px"> EasyBuy</span></a>
						</div>
						<div class="btn-group pull-right">
						
						</div>
					</div>
					
					<div class="col-sm-8">
							<form action="{{route('search')}}" method="post">
						<input type="text" placeholder="Search for Brand , Products" name="search" id="search"/>
						<input type="submit" value="Search" id="submit" > 
						{{csrf_field()}}
							</form>
							
						
					</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{route('home')}}" class="active">Home</a></li>
							
										<li class="dropdown"><a href="#">Electronics<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('mobile')}}">Mobiles</a></li>
										<li><a href="{{route('tablet')}}">Tablets</a></li> 
										<li><a href="{{route('camera')}}">Camera</a></li> 
										<li><a href="{{route('laptop')}}">Laptop</a></li> 
										<li><a href="{{route('networkcomponent')}}">Network Component</a></li> 
                                    </ul>
                                </li> 
                                		<li class="dropdown"><a href="#">Appliances<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('tv')}}">TV</a></li>
										<li><a href="{{route('homeentertainment')}}">Home Entertainment</a></li> 
										<li><a href="{{route('washingmachine')}}">Washing Machine</a></li> 
										<li><a href="{{route('refrigerator')}}">Refrigerator</a></li> 
										<li><a href="{{route('ac')}}">Air Conditioner</a></li> 
                                    </ul>
                                </li> 
                                		<li class="dropdown"><a href="#">Men<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('footwearMens')}}">Footwear</a></li>
										<li><a href="{{route('clothingMens')}}">Clothing</a></li> 
										<li><a href="{{route('watchesMens')}}">Watches</a></li> 
										<li><a href="{{route('accesoriesMens')}}">Accesories</a></li> 
										<li><a href="{{route('personalMens')}}">Personal care Appliances</a></li>
									
                                    </ul>
                                </li> 
										<li class="dropdown"><a href="#">Women<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('footwearWomen')}}">Footwear</a></li>
										<li><a href="{{route('clothingWomen')}}">Clothing</a></li> 
										<li><a href="{{route('watchesWomen')}}">Watches</a></li> 
										<li><a href="{{route('accesoriesWomen')}}">Accesories</a></li> 
										<li><a href="{{route('personalWomen')}}">Personal care Appliances</a></li> 
										<li><a href="{{route('jewelleryWomen')}}">Jewellwery</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#"><Kids>Kids</Kids><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('footwearKids')}}">Footwear</a></li>
										<li><a href="{{route('clothingKids')}}">Clothing</a></li> 
										<li><a href="{{route('toys')}}">Toys</a></li> 
										<li><a href="{{route('school')}}">School Accesories</a></li> 
										<li><a href="{{route('babycare')}}">Baby care</a></li> 
										
                                    </ul>
                                </li> 
                           
                                	
                                		<li class="dropdown"><a href="#">Home & Furniture<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('kitchendinning')}}">Kitchen & Dinning</a></li>
										<li><a href="{{route('dinning')}}">Dinning & Serving</a></li> 
										<li><a href="{{route('kitchenstorage')}}">Kitchen Storage</a></li> 
										<li><a href="{{route('furniture')}}">Furniture</a></li> 
										<li><a href="{{route('lightning')}}">Lightning</a></li> 
                                    </ul>
                                </li> 
                                		<li class="dropdown"><a href="#">Books & More<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('book')}}">Books</a></li>
										<li><a href="{{route('stationary')}}">Stationary</a></li> 
										<li><a href="{{route('gaming')}}">Gaming</a></li> 
										<li><a href="{{route('music')}}">Music</a></li> 
										<li><a href="{{route('movies')}}">Movies & TV shows</a></li> 
											<li><a href="{{route('sports')}}">Sports</a></li> 
										<li><a href="{{route('fitness')}}">Fitness</a></li> 
										
                                    </ul>
                                </li> 
								<li><a href="{{route('contact')}}">Contact Us</a></li>
							</ul>
						</div>
					</div>
				
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->