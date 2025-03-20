<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Http\Requests\Drivers\StoreRequest;
use App\Models\Driver;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Driver $driver)
    {
        $data = $request->validated();

        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Driver::firstOrCreate($data);

        return redirect()->route('drivers.index');
    }
}
