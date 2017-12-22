<?php

namespace App\Http\Controllers\Admin;

use App\Device;
use App\DeviceHandler;
use App\Http\Controllers\Controller;
use App\Manufacturer;
use Exception;

class DeviceHandlerController extends Controller
{
    public function index()
    {
        return view('admin.handlers.index')
            ->with('handlers', DeviceHandler::with(['device', 'device.manufacturer'])->get());
    }

    public function create()
    {
        return view('admin.handlers.create')
            ->with('devices', Device::all());
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'post' => '',
            'author' => 'required',
            'discourse_url' => 'required|url',
            'device' => 'required|exists:devices,id'
        ]);

        DeviceHandler::create(array_merge(
            request()->only(['title', 'post', 'author', 'discourse_url']),
            ['device_id' => request('device')]
        ));

        return redirect()->route('admin.handlers.index');
    }

    public function destroy(DeviceHandler $handler)
    {
        $handler->delete();

        return redirect()->route('admin.handlers.index');
    }
}
