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
                   Show Complains
    
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>    
              </tr>
              </thead>
            
             
    @foreach($contact as $contacts)
     <tr>
               <td>{{ $contacts->id}} </td>
                <td> {{$contacts->name  }}</td>
                   <td>{{ $contacts->email}} </td>
                <td> {{$contacts->subject  }}</td>
                   <td>{{ $contacts->message}} </td>
     
                          
              </tr>
     @endforeach
              
          </table>


                </div>
              </div>
            </div>
          </div>


 @endsection