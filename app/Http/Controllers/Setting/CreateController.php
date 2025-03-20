<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('settings.create');
    }
}
