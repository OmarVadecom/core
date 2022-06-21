<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    public $table = 'employment_status';
    public $timestamps = true;
    public function job()
    {
    	return $this->belongsTo('App\Models\Job');
    }
}
