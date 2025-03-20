<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'drivers';
    protected $guarded = false;
    protected $fillable = ['first_name', 'last_name', 'salary', 'email', 'birth_date', 'image', 'image_url'];

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'id', 'driver_id');
    }
    public function getFirstNameAttribute($value)
    {
        return mb_ucfirst($value);
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = mb_strtolower($value);
    }
}
