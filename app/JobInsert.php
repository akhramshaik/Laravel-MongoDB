<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;

class JobInsert extends Eloquent
{
        protected $connection = 'mongodb';
        protected $collection="jobs_applied";


 protected $fillable = array(
 	'job_id',
 	'user_name',
 	'user_email',
 	'user_phone',
 	'user_date',
 	'original_file_name',
 	'selected'
);
}
