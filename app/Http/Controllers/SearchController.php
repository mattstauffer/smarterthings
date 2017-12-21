<?php

namespace App\Http\Controllers;

use App\Device;
use App\DeviceHandler;
use App\Manufacturer;

class SearchController extends Controller
{
    public function __invoke()
    {
        $term = request('q');

        $handlers = DeviceHandler::where('title', 'like', "%$term%")->get();
        $devices = Device::where('name', 'like', "%$term%")->get();
        $manufacturers = Manufacturer::where('name', 'like', "%$term%")->get();

        return view('results')
            ->with('term', $term)
            ->with('handlers', $handlers)
            ->with('devices', $devices)
            ->with('manufacturers', $manufacturers);
    }
}
