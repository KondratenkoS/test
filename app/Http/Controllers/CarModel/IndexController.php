<?php

namespace App\Http\Controllers\CarModel;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $carModels = CarModel::all();
        return view('car_models.index', compact('carModels'));
    }
}
