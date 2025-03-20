<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Jobs\SendFarewellEmail;
use App\Models\Driver;

class DeleteController extends Controller
{
    public function __invoke(Driver $driver)
    {
        $name = $driver->first_name;
        $email = $driver->email;

        $driver->delete();

        SendFarewellEmail::dispatch($email, $name)->delay(now()->addHours(24));

        return redirect()->route('drivers.index');
    }
}
