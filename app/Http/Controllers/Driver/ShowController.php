<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class ShowController extends Controller
{
    public function __invoke(Driver $driver)
    {
        return view('drivers.show', compact('driver'));
    }
}
