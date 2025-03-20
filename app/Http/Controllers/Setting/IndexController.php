<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class IndexController extends Controller
{
    public function __invoke()
    {
        $settings = Setting::all();
        return view('settings.index', compact('settings'));
    }
}
