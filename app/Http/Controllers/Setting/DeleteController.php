<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class DeleteController extends Controller
{
    public function __invoke(Setting $setting)
    {
        $setting->delete();

        return redirect()->route('settings.index');
    }
}
