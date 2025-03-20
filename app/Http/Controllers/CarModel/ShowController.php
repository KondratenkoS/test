<?php

namespace App\Http\Controllers\CarModel;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(CarModel $carModel)
    {
        return view('car_models.show', compact('carModel'));
    }
}
