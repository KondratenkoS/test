<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Setting $setting)
    {
        $data = $request->validated();

        if (isset($data['logo_path'])) {
            $data['logo_path'] = Storage::disk('public')->put('/logos', $data['logo_path']);
        }

        $setting->update($data);

        return view('settings.show', compact('setting'));
    }
}
