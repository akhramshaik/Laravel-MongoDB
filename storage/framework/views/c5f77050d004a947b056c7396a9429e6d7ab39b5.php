<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">




<link href="<?php echo e(asset('/admin_template/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/admin_template/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="<?php echo e(asset('/admin_template/css/font-awesome.css')); ?> " rel="stylesheet">
<link href="<?php echo e(asset('/admin_template/css/style.css')); ?> " rel="stylesheet">
<link href="<?php echo e(asset('/admin_template/css/pages/dashboard.css')); ?> " rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>



  <div class="navbar navbar-fixed-top">
  <?php echo $__env->make('jobportal.common-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
  <!-- /navbar -->
  <div class="subnavbar">
  </div> 




<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">

        <!-- /span6 -->
        <div class="span12">
  

   <button class="btn btn-danger"><a style="margin: 20px;color: white;margin: 20px;" href="<?php echo e(URL::to('admin_list')); ?>">Back</a></button>
<button type="button" onclick="prevcall()" style="margin: 20px;display: none" class="btn btn-primary btnprev">Previous</button>
<button type="button" onclick="nextitem()"  style="margin: 20px;display: none" class="btn btn-success btnnext">Next</button>
<a href="" id="addlink"><button type="button" style="margin: 20px;" class="btn btn-primary">Download Resume</button></a>

          <div class="widget widget-nopad">
         
         

            <!-- /widget-header -->
            <div class="widget-content">
           
                  


<!-- <td><a id="viewsreslink"  target="_blank"><button type="button" class="btn btn-success">View/Download</button></a></td> -->
<br>
<br>
<button type="button" onclick="shortlist()" style="margin:20px" class="btn btn-success" >Shortlist</button>
<button type="button" onclick="reject()" style="margin:20px" class="btn btn-danger">Reject</button>


<table class="table table-bordered" style="margin:20px">
    <thead>
      <tr>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Phone</th>
        <th>Current Status</th>
        <th>Applied Date</th>

      </tr>
    </thead>
    <tbody>
      <tr>
           <td><p id='uuname'></p></td>
        <td><p id='uuemail'></p></td>
         <td><p id='uuphone'></p></td>
          <td><p id='uustatus'></p></td>
          <td><p id='uudate'></p></td>
          <td style="border: none;"> </td>
      </tr>
    

    </tbody>
  </table>


 <iframe id="docrend"  width="1000" height="500" src=""></iframe>



    
<input type="hidden" id="vresume" name="">


                  

               
<input type="hidden" id="prevvv" >
<input type="hidden" id="nextt" >





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

  <!-- Modal -->


<div class="footer">
  <?php echo $__env->make('jobportal.common-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo e(asset('/admin_template/js/jquery-1.7.2.min.js')); ?>"></script> 
<script src="<?php echo e(asset('/admin_template/js/excanvas.min.js')); ?> "></script> 
<script src="<?php echo e(asset('/admin_template/js/chart.min.js')); ?> " type="text/javascript"></script> 
<script src="<?php echo e(asset('/admin_template/js/bootstrap.js')); ?> "></script>
<script language="javascript" type="text/javascript" src="<?php echo e(asset('/admin_template/js/full-calendar/fullcalendar.min.js')); ?> "></script>
 
<script src="<?php echo e(asset('/admin_template/js/base.js')); ?>"></script> 
<script>     






var str = window.location.pathname;
var n = str.indexOf("view_applied");
var res = str.substring(n+13);

window.globalVar = res;


        function submit_dataa(res)

{

  console.log('window.globalVar',window.globalVar);

window.globalVar = res;

var datasend = 'idtosearch='+res;
        $.ajax({

        type : "POST",
        url: "<?php echo e(URL::to('/get_individual')); ?>",
        data: datasend,
        cache: false,
        success: function(result)
            {
                // console.log(result);
                // console.log(result.data[0].user_name);

                var uname = $('#uuname').html(result.data[0].user_name);
                var uuemail = $('#uuemail').html(result.data[0].user_email);
                var uuphone = $('#uuphone').html(result.data[0].user_phone);
                var uudate  = $('#uudate').html(result.data[0].user_date);

                if(result.data[0].selected == 0)
                {
                var uustatus = $('#uustatus').html('Screening');

                }else if(result.data[0].selected == 1)
                {
                var uustatus = $('#uustatus').html('Shortlisted').css("color", "green");;

                } else if(result.data[0].selected ==2)
                {
                var uustatus = $('#uustatus').html('Rejected').css("color", "red");;

                }

               var resume  = result.data[0].original_file_name;





$("#addlink").attr("href", "http://localhost/xampp/olddumps/mongo/public/uploads/"+resume)
$("#docrend").attr("src", "http://localhost/xampp/olddumps/mongo/public/uploads/"+resume+"")







if(result.next != null)
{
var nextt = $('#nextt').val(result.next.$id);
$('.btnnext').css({"display": "initial"});
}

if(result.previous != null)
{
var prev = $('#prevvv').val(result.previous.$id);
$('.btnprev').css({"display":"initial"});
}






            }
        });



}

submit_dataa(window.globalVar);


function prevcall()
{
var prev = $('#prevvv').val();
submit_dataa(prev);

}

function nextitem()
{
var nnnf = $('#nextt').val();
submit_dataa(nnnf);
}


function shortlist(){


  var datasend = 'shortid='+window.globalVar;

        $.ajax({

        type : "POST",
        url: "<?php echo e(URL::to('/process_short')); ?>",
        data: datasend,
        cache: false,
        success: function(result)
            {
                submit_dataa(window.globalVar);

}

        });




}





function reject()
{


  var datasend = 'shortid='+window.globalVar;

        $.ajax({

        type : "POST",
        url: "<?php echo e(URL::to('/process_rejec')); ?>",
        data: datasend,
        cache: false,
        success: function(result)
            {
                submit_dataa(window.globalVar);

}

        });




}
      // });





    </script><!-- /Calendar -->
</body>
</html>
