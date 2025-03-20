<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;

class ShowController extends Controller
{
    public function __invoke(Bus $bus)
    {
        return view('buses.show', compact('bus'));
    }
}
