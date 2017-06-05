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
        <div class="span12">
       

        </div>
        <!-- /span6 -->
        <div class="span12">
   
<div class="form-group">
  <label for="sel1">Select Company To List Apllications:</label>
  <select class="form-control" id="select_compnay">



      <?php foreach($sampledata as $sample): ?>
      <option value="<?php echo e($sample->_id); ?>"><?php echo e($sample->company_name); ?></option>
      <?php endforeach; ?>


  </select>
</div>



          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List of Applications</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr id="jsthide" style="display: none;">
                    <th> User Name </th>
                    <th> Email</th>
                    <th> Phone</th>
                    <th> Date</th>
                    <th> Status</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody id="selecteddata">



<div class="alert alert-warning deferrr"><center><strong>Sorry...!</strong> Select a Company to see applicants. <i class="fa fa-meh-o" aria-hidden="true"></i> </center></div>


                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>

        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!-- /main -->

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

$( "#select_compnay" ).change(function() {
  var valsel = $('#select_compnay').val();

                console.log(valsel);

    var datasend = 'idtofilter='+valsel;

        $.ajax({

        type : "POST",
        url: "<?php echo e(URL::to('/filter_company_applicat')); ?>",
        data: datasend,
        cache: false,
        success: function(result)
            {
               
// console.log(result);
console.log(result.length);

               var result_check = result.length;
$('#selecteddata').html('');

if(result_check > 0 )
{

$.each(result, function(index, json) 
{

var chkstatus = json.selected;

if(chkstatus == 0)
{
  var stst = 'Screening'
} else if(chkstatus == 1)
{

  var stst = 'Shortlisted'

} else if(chkstatus == 1)
{
  var stst = 'Rejected'

}

$('.deferrr').css({'display':'none'});
$('#jsthide').css({'display':''});
$('#selecteddata').append('<tr><td> '+json.user_name+' </td><td> '+json.user_email+' </td><td> '+json.user_phone+' </td><td> '+json.user_date+'  </td><td>'+stst+'</td><td class="td-actions"><a href="view_applied/'+json._id+'" class="btn btn-small btn-success"> View  </a></td>');

});
}
else 
{
$('.deferrr').css({'display':'none'});
$('#jsthide').css({'display':''});
$('#selecteddata').append('<div class="alert alert-warning"><center><strong>Sorry...!</strong> Select a Company to see applicants. <i class="fa fa-meh-o" aria-hidden="true"></i> </center></div>');

}


          }



});

});

    </script><!-- /Calendar -->
</body>
</html>
