<?php

namespace App\Http\Controllers\ExDriver;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class IndexController extends Controller
{
    public function __invoke()
    {
        $drivers = Driver::onlyTrashed()->get();
        return view('ex_drivers.index', compact('drivers'));
    }
}
