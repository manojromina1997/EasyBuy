@extends('layouts.master')
@section('title')
EasyBuy
@endsection
@section('content')
<img src="./images/offers/mobile.jpg" width="100%" height="60%"/>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./images/offers/mobile.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="./images/offers/mobile2.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="./images/offers/mobile3.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


@endsection