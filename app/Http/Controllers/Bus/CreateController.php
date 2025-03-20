<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use App\Models\Driver;

class CreateController extends Controller
{
    public function __invoke()
    {
        $models = CarModel::all();
        $drivers = Driver::all();

        return view('buses.create', compact('models', 'drivers'));
    }
}
