<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhySelect extends Model
{
    // protected $guarded = []; 

    public function language() {
        return $this->belongsTo('App\Language');
    }
}
