<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\StoreRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Setting $setting)
    {
        $data = $request->validated();

        $data['description'] = mb_ltrim($data['description']);
        $data['logo_path'] = Storage::disk('public')->put('/logos', $data['logo_path']);

        Setting::firstOrCreate($data);

        return redirect()->route('settings.index');
    }
}
