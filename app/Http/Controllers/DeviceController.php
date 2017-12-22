<?php

namespace App\Http\Controllers;

use App\Device;
use App\Manufacturer;
use Exception;

class DeviceController extends Controller
{
    public function show(Manufacturer $manufacturer, Device $device)
    {
        if ($manufacturer->id != $device->manufacturer_id) {
            throw new Exception("Invalid URL");
        }

        return view('devices.show')->with('device', $device);
    }
}
