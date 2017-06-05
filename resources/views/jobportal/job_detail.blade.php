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


<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">

        <!-- /span6 -->
        <div class="span12">
  
@if (session('file_status_ok'))
    <div class="alert alert-success">
        {{ session('file_status_ok') }}
    </div>
@endif


          <div class="widget widget-nopad">
         
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="news-items">
                <li>
                  
           
                  <div class="news-item-detail"> 
                      <p  class="news-item-title" > Company Name: {{$job_desc[0]->company_name}} </p>
                      <p class="news-item-preview"> Company Description: {{$job_desc[0]->company_desc}}   </p>
                      <br>
                      <br>                 
                      <br>
                  
                      <p class="news-item-title" > Job Title: {{$job_desc[0]->job_title}} </p>
                      <p class="news-item-preview"> Job Description: {{$job_desc[0]->job_desc}}</p>
                      <br>
                      <br>               
              
                  <p class="news-item-title" > Contact: {{$job_desc[0]->company_contact}} </a>
                  <br>                 
                  <br>    






   <button class="btn btn-danger"><a style="color: white;" href="{{ URL::to('job_apply') }}">Back</a></button>

                <button class="btn btn-primary"><a style="color: white;" href="{{ URL::to('job_form/' . $job_desc[0]->_id) }}">Apply for this position</a></button>


                  </div>
                  
                </li>

               
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 

  <br> <br> <br> 
</div>
<!-- /main -->




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
<script>     




   






    </script><!-- /Calendar -->
</body>
</html>
