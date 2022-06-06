<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqSection extends Model
{
    protected $table = "faqs_sections";
    protected $guarded = [];
    use HasFactory;

    public function faqs_category()
    {
        return $this->belongsTo(FaqCategory::class,'category_id');
    }
}
