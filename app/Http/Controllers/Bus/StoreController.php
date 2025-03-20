<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bus\StoreRequest;
use App\Models\Bus;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Bus $bus)
    {
        $data = $request->validated();
//            dd($data);
        Bus::firstOrCreate($data);
        return redirect()->route('buses.index');
    }
}
