<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Daynamicpage extends Model
{
    protected $casts = [
        'modules' => 'array'
    ];

    protected $appends = [
        'url'
    ];

    public function language(): BelongsTo
    {
        return $this->belongsTo('App\Language');
    }

    public function category()
    {
        $this->belongsTo(dynamicPageCategories::class);
    }

    public function getUrlAttribute()
    {
        $url='';

        if($this['category_id'] != null) {
            $dynamicPageCategory = dynamicPageCategories::find($this['category_id']);
            if(request()->get('language') == "ar"){
                $url=request()->get('language').'/';
            }
            return $url.$dynamicPageCategory->slug . '/' . $this['slug'];
        } else {
            return $url.$this['slug'];
        }
    }
}
