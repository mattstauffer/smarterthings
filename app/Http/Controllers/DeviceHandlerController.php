<?php

namespace App\Http\Controllers;

use App\Device;
use App\DeviceHandler;
use Exception;
use Illuminate\Http\Request;

class DeviceHandlerController extends Controller
{
    public function show($manufacturer_id, Device $device, DeviceHandler $handler)
    {
        if ($handler->device_id != $device->id || $device->manufacturer_id != $manufacturer_id) {
            throw new Exception('Invalid URL');
        }

        return view('handlers.show')
            ->with('handler', $handler);
    }
}
