<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['client_name', 'client_email_address', 'client_phone_number',
    'package', 'message', 'emart_id','status', 'thanks_page', 'category'];
}
