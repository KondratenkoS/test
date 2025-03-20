<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class IndexController extends Controller
{
    public function __invoke()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }
}
