<?php

namespace App\Http\Controllers;

use App\Device;
use Exception;

class DeviceController extends Controller
{
    public function show($manufacturer_id, Device $device)
    {
        if ($manufacturer_id != $device->manufacturer_id) {
            throw new Exception("Invalid URL");
        }

        return view('devices.show')->with('device', $device);
    }
}
