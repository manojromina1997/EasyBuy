@extends('layouts.adminmaster')
@section('content')
<br>
<br>
<br>

<div class="right_col" role="main">
        <div class="">
        @include('includes.alerts')

          <div class="page-title">
            <div class="title_left">
              <h3>Add Product</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                   <form class="form-horizontal form-label-left" method="post" action="{{url('/addproduct')}}">

                           <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Category Name</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">SubCategory Name</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="subcategory_name" placeholder="SubCategory Name">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Company Name</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Model Name</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="model_name" placeholder="Model Name">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Image Url</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="file" class="form-control" name="image_url" placeholder="Image Url">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Features</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="features" placeholder="Features">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Price</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="price" placeholder="price">
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12">Description</label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="description" placeholder="Description">
                      </div>
               
                  <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-4">
                       
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  {{csrf_field()}}
                  </form>
                </div>
              </div>
            </div>
          </div>
 @endsection