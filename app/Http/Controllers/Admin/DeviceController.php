<?php

namespace App\Http\Controllers\Admin;

use App\Device;
use App\Http\Controllers\Controller;
use App\Manufacturer;
use Exception;

class DeviceController extends Controller
{
    public function index()
    {
        return view('admin.devices.index')
            ->with('devices', Device::with('manufacturer')->get());
    }

    public function create()
    {
        return view('admin.devices.create')
            ->with('manufacturers', Manufacturer::all())
            ->with('protocols', Device::protocols());
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => '',
            'website' => 'url',
            'protocol' => 'required',
            'manufacturer' => 'required|exists:manufacturers,id'
        ]);

        Device::create(array_merge(
            request()->only(['name', 'description', 'website', 'protocol']),
            ['manufacturer_id' => request('manufacturer')]
        ));

        return redirect()->route('admin.devices.index');
    }

    public function destroy(Device $device)
    {
        $device->delete();

        return redirect()->route('admin.devices.index');
    }
}
