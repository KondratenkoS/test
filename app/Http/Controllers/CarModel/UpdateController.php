<?php

namespace App\Http\Controllers\CarModel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarModel\UpdateRequest;
use App\Models\CarModel;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CarModel $carModel)
    {
        $data = $request->validated();
        $carModel->update($data);

        return view('car_models.show', compact('carModel'));
    }
}
