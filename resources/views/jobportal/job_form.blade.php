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



<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Fill the form to apply</h3>
            </div>
  
          <div class="widget">
       
            <!-- /widget-header -->
            <div class="widget-content">

            <div class="container" style="    margin: 10px;">
                            <form id="upform" action="{{URL::to('/process_form_data')}}" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="text" class="form-control" name="post_name" id="post_name">
                            </div>


                            <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="post_email" id="post_email">
                            </div>

                            <input type="hidden"  name="post_job_id" class="form-control" value="{{$job_id}}" >



                            <div class="form-group">
                            <label for="email">Phone:</label>
                            <input type="number" class="form-control" name="post_phone" id="email">
                            </div>


                            <br>

                            <div class="form-group">
                            <label for="email">Upload Resume:</label>
                            <input type="file" accept=".pdf" name="file1" />
                            </div>




<br>
<br>
<br>

   <button class="btn btn-danger"><a style="color: white;" href="{{ URL::to('job_apply') }}">Back to Jobs</a></button>
                            <button type="submit" class="btn btn-primary">Submit Application</button>

                            </form>


                     



            </div>
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

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
