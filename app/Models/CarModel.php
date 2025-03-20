<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'car_models';
    protected $fillable = ['name'];
    protected $guarded = false;

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'id', 'model_id');
    }
}
