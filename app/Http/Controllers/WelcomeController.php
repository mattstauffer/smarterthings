<?php

namespace App\Http\Controllers;

use App\Device;
use App\DeviceHandler;
use App\Manufacturer;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $latestHandlers = DeviceHandler::latest()->limit(5)->get();
        $latestDevices = Device::latest()->limit(5)->get();
        $manufacturers = Manufacturer::orderBy('name')->get();

        return view('welcome')
            ->with('latestHandlers', $latestHandlers)
            ->with('latestDevices', $latestDevices)
            ->with('manufacturers', $manufacturers);
    }
}
