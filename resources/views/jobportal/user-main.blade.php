<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">




<link href="{{ asset('/admin_template/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/admin_template/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="{{ asset('/admin_template/css/font-awesome.css') }} " rel="stylesheet">
<link href="{{ asset('/admin_template/css/style.css') }} " rel="stylesheet">
<link href="{{ asset('/admin_template/css/pages/dashboard.css') }} " rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>



  <div class="navbar navbar-fixed-top">
  @include('jobportal.common-header')
  </div>
  <!-- /navbar -->
  <div class="subnavbar">
  </div> 



      @yield('content')




<!-- /extra -->
<div class="footer">
  @include('jobportal.common-footer')
</div>



<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{ asset('/admin_template/js/jquery-1.7.2.min.js') }}"></script> 
<script src="{{ asset('/admin_template/js/excanvas.min.js') }} "></script> 
<script src="{{ asset('/admin_template/js/chart.min.js') }} " type="text/javascript"></script> 
<script src="{{ asset('/admin_template/js/bootstrap.js') }} "></script>
<script language="javascript" type="text/javascript" src="{{ asset('/admin_template/js/full-calendar/fullcalendar.min.js') }} "></script>
 
<script src="{{ asset('/admin_template/js/base.js') }}"></script> 

</body>
</html>
