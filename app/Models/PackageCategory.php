<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    protected $table = 'packages_categories';
    protected $fillable = ['status', 'name_en','name_ar', 'slug','emart_id'];

    public function packages()
    {
       return $this->hasMany(Package::class,'category_id');
    }

    public function getNameAttribute(){
        if (app()->getLocale()=="ar"){
            return $this->name_ar;
        }else{
            return $this->name_en;
        }
    }
}
