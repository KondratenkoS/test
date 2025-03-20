<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;

class DeleteController extends Controller
{
    public function __invoke(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('buses.index');
    }
}
