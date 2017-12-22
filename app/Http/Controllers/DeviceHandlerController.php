<?php

namespace App\Http\Controllers;

use App\Device;
use App\DeviceHandler;
use App\Manufacturer;
use Exception;
use Illuminate\Http\Request;

class DeviceHandlerController extends Controller
{
    public function show(Manufacturer $manufacturer, Device $device, DeviceHandler $handler)
    {
        if ($handler->device_id != $device->id || $device->manufacturer_id != $manufacturer->id) {
            throw new Exception('Invalid URL');
        }

        return view('handlers.show')
            ->with('handler', $handler);
    }
}
