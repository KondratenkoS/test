<?php

namespace App\Http\Controllers\CarModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('car_models.create');
    }
}
