

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EasyBuy</title>

    <!-- Styles -->
    <link href="./css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

  <!-- Bootstrap core CSS -->

  <link href="./admin/css/bootstrap.min.css" rel="stylesheet">

  <link href="./admin/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="./admin/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="./admin/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./admin/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="./admin/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="./admin/css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="./admin/js/jquery.min.js"></script>
  <script src="./admin/js/nprogress.js"></script>

</head>


<body class="nav-md">
@include('includes.adminheader')


  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">





          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <ul class="nav side-menu">
                  <li><a href="{{ url('/admins') }}"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="{{ url('/orders') }}"><i class="fa fa-inbox"></i>Orders</a>
                </li>


                <li><a><i class="fa fa-list-alt"></i> Product <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="{{ url('/addproduct') }}">Add</a>
                    </li>
                      <li><a href="{{ url('/showproduct') }}">Show</a>
                    </li>
                    <li><a href="{{ url('/deleteproduct') }}">Delete</a>
                    </li>
                  </ul>
           
                <li><a><i class="fa fa-amazon"></i> Problems & Complaints <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="{{ url('/showcomplains') }}">Show</a>
                    </li>
                  </ul> 
              </ul>
            </div>
   
            </div>

          </div>
         
          <!-- /menu footer buttons -->
        </div>
      </div>

@yield('content')


  <script src="js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="./admin/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="./admin/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="./admin/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="./admin/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="./admin/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="./admin/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="./admin/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="./admin/js/chartjs/chart.min.js"></script>

  <script src="./admin/js/custom.js"></script>

 
</body>

</html>
