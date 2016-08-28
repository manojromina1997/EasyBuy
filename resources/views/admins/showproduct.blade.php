@extends('layouts.adminmaster')
@section('content')
<br>
<br>
<br>
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                   Show Product
    
                </h3>
            </div>

            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
              <thead style="background-color:lightsteelblue">
                   <th>Id</th>
                  <th>Category Name</th>
                  <th>SubCategory Name</th>
                  <th>Company Name</th>
                  <th>Model Name</th>
                  <th>Features</th>
                      <th>Images</th>
                          <th>Price</th>
                              <th>Descriptions</th>


                   
              </tr>
              </thead>
            
             
    @foreach($product as $pro)
     <tr>
               <td>{{ $pro->id}} </td>
                <td> {{$pro->category_name  }}</td>
                <td>{{ $pro->subcategory_name }} </td>
                <td>{{ $pro->company_name }} </td>
                <td>{{ $pro->model_name  }}</td>
                <td>{{ $pro->features }}</td>
                <td><img src="./images/categories/{{ $pro->image_url }}"/></td>
                <td>{{ $pro->price  }}</td>
                <td>{{ $pro->description }}</td>
                      
                          
              </tr>
     @endforeach
              
          </table>


                </div>
              </div>
            </div>
          </div>


 @endsection