<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'buses';
    protected $fillable = ['car_number', 'model_id', 'driver_id'];
    protected $guarded = false;

    public function driver()
    {
        return $this->hasOne(Driver::class, 'id', 'driver_id');
    }

    public function model()
    {
        return $this->hasOne(CarModel::class, 'id', 'model_id');
    }

    // Автоматично приводити номер до верхнього регістру
    public function setCarNumberAttribute($value)
    {
        $this->attributes['car_number'] = mb_strtoupper($value);
    }
}
