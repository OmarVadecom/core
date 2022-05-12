<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dynamicPageCategories extends Model
{
    protected $table = 'dynamic_page_categories';
    protected $fillable = ['status', 'title', 'slug', 'language_id'];

    public function dynamicPages()
    {
        return $this->hasMany('App\Models\Daynamicpage');
    }
}
