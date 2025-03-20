<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('drivers.create');
    }
}
