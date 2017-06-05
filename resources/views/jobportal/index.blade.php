@extends('jobportal.user-main')

@section('content')
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget widget-nopad">
         
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content" style="margin-bottom: 304px;">




                  <h6 class="bigstats">Connect with 20,000+ employers. Apply to Millions of job opportunities across top companies, industries & locations on India’s No.1 job site. Apply online. Post CV today.</h6>


                <div id="big_stats" style="text-align: center;" class="cf">
                <button class="btn btn-primary"><a style="color: white;" href="{{ URL::to('job_apply') }}">Apply for Jobs</a></button>
                </div>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>


        </div>
  
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->


@endsection





