<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bus\UpdateRequest;
use App\Models\Bus;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Bus $bus)
    {
        $data = $request->validated();
        $bus->update($data);

        return view('buses.show', compact('bus'));
    }
}
