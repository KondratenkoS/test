<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class EditController extends Controller
{
    public function __invoke(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }
}
