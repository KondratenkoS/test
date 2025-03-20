<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class ShowController extends Controller
{
    public function __invoke(Setting $setting)
    {
        return view('settings.show', compact('setting'));
    }
}
