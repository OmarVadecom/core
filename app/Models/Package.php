<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];
    public function language() {
        return $this->belongsTo('App\Language');
    }
    public function category() {
        return $this->belongsTo('App\Models\PackageCategory');
    }


    public function getTitleAttribute(){
        if (app()->getLocale()=="ar"){
            return $this->title_ar;
        }else{
            return $this->title_en;
        }
    }

    public function getFeatureAttribute(){
        if (app()->getLocale()=="ar"){
            return $this->feature_ar;
        }else{
            return $this->feature_en;
        }
    }
}
