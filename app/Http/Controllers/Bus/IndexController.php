<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;

class IndexController extends Controller
{
    public function __invoke()
    {
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }
}
