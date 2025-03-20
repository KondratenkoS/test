<?php

namespace App\Http\Controllers\CarModel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarModel\StoreRequest;
use App\Models\CarModel;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        CarModel::firstOrCreate($data);
        return redirect()->route('car_models.index');
    }
}
