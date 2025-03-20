<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['company_name', 'logo_path', 'admin_phone', 'description'];
    protected $guarded = false;
}
