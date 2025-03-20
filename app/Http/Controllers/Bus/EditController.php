<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\CarModel;
use App\Models\Driver;

class EditController extends Controller
{
    public function __invoke(Bus $bus)
    {
        $drivers = Driver::all();
        $models = CarModel::all();
        return view('buses.edit', compact('bus', 'drivers', 'models'));
    }
}
