<?php

namespace App\Http\Controllers\CarModel;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(CarModel $carModel)
    {
        $carModel->delete();

        return redirect()->route('car_models.index');
    }
}
