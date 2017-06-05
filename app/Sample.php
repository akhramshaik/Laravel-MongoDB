<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;

class Sample extends Eloquent
{
        protected $connection = 'mongodb';
        protected $collection="jobs_data";


 protected $fillable = array(
 	'company_name',
 	'company_desc',
 	'job_title',
 	'job_desc',
 	'company_contact',
 	'selected'
);
}
