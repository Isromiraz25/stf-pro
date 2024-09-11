<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="x-icon" href="{{ asset('/image/logo.png') }}">
	<link rel="icon" href="{{asset('admin')}}images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    @include('layouts.style')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-mobile" aria-hidden="true"></i> <span style="color:red;">M </span>O s i<span></a>
            </div>

            <div class="clearfix"></div>

            <br/>

            <!-- sidebar menu -->
          @include('layouts.sider')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('layouts.footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
      @include('layouts.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          {{-- <div class="row"> --}}
          @yield('content')
          {{-- </div> --}}
        </div>
          <!-- /top tiles -->

          

        


         
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <p>Today's date: {{ date('Y-m-d') }}</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @include('layouts.script')
	
  </body>
</html>
