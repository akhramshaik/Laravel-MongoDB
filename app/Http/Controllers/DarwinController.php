<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB,View;
use App\Sample;
use App\JobInsert;
use Illuminate\Support\Facades\Redirect;

class DarwinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('jobportal.index');
        // $post = array('names'=>'abeeec');
        // $insert = Sample::create($post);

        //    return $user = DB::connection('mongodb')->collection('mycoll')->first();
    }



    public function jobapply()
    {

        $mydata = Sample::all();
        $send_data_inarry = array('all_jobs_listing' => $mydata);
        return view('jobportal.job_apply')->with($send_data_inarry);
    }


    public function admin_list()
    {


    $mydata = JobInsert::all();
    $sampledata = Sample::all();


    $send_data_inarry = array(

'all_jobs_listing' => $mydata,
'sampledata' => $sampledata

);


        return view('jobportal.admin_list')->with($send_data_inarry);
    }










    public function view_applied($ids)
    {
                $mydata = JobInsert::where('_id',$ids)->get();


    $send_data_inarry = array(

'job_desc' => $mydata

);

        return view('jobportal.person_details')->with($send_data_inarry);
    }






    public function jobdata()
    {
       


                    for ($i=1; $i <= 10 ; $i++) { 

                    $data_sample  = array(
                        'company_name' => "ABC Company".$i,
                        'company_desc' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo    consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                        'job_title' => "Title Goes Here".$i,
                        'job_desc' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo    consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                        'company_contact' => "abc@123.com".$i,
                        'selected' => 0
                     );


                            $insert = Sample::create($data_sample);


                    }



    }




    public function filter_company_applicat(Request $request)
    {

    $post=$request->all();

   return $mydata = JobInsert::where('job_id',$post['idtofilter'])->get();






}






    public function job_apply_form($ids)
    {
                  $mydata = Sample::where('_id',$ids)->get();


    $send_data_inarry = array(

'job_desc' => $mydata

);

        return view('jobportal.job_detail')->with($send_data_inarry);
    }





    public function jobformsub($ids)
    {

     
    $send_data_inarry = array(

'job_id' => $ids

);
        return view('jobportal.job_form')->with($send_data_inarry);
    }




    public function job_form($ids)
    {
        return view('jobportal.job_form');
    }


    public function get_individual(Request $request)
    {

    $post=$request->all();



    $mydata = JobInsert::where('_id',$post['idtosearch'])->get();

    $previous = JobInsert::where('_id', '>', $mydata[0]->_id)->max('_id');
    $next = JobInsert::where('_id', '<', $mydata[0]->_id)->max('_id');


return $finaldata = array('data'=>$mydata,'previous'=>$previous,'next'=>$next);

}





public function process_short(Request $request)
{

$post=$request->all();

$update_first_data = JobInsert::where('_id', $post['shortid'])->update(array('selected' => 1));

}



public function process_rejec(Request $request)
{

$post=$request->all();

$update_first_data = JobInsert::where('_id', $post['shortid'])->update(array('selected' => 2));


}




    public function process_form_data(Request $request)
    {

        $post=$request->all();

date_default_timezone_set("Asia/Kolkata");

    $date_stamp = date('d-m-Y');








    $temp_name=$_FILES['file1']['tmp_name'];

    $path='uploads/';
    $original_file_name = $date_stamp."_".$_FILES['file1']['name'];
    $destination=$path.$original_file_name;
    if(move_uploaded_file($temp_name, $destination))
    {


$datatoproc = array(
    'job_id' => $post['post_job_id'],
    'user_name' => $post['post_name'],
    'user_email' => $post['post_email'],
'user_phone' => $post['post_phone'],
'user_date' => $date_stamp,
'original_file_name' => $original_file_name,
'selected' => 0
    );



                            $insert = JobInsert::create($datatoproc);





   return Redirect::to('job_apply_form/'.$post['post_job_id'])->with('file_status_ok', 'Your Submission was Succesful.');



 } 
    else 
    {
echo 'error in upload';
    }




    }



    public function get_all_jobs()
    {
             return $all_job_data = Sample::all();
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
