<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Manufacturer;
use Exception;

class ManufacturerController extends Controller
{
    public function index()
    {
        return view('admin.manufacturers.index')
            ->with('manufacturers', Manufacturer::get());
    }

    public function create()
    {
        return view('admin.manufacturers.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'website' => 'url',
        ]);

        Manufacturer::create(request()->only(['name', 'website']));

        return redirect()->route('admin.manufacturers.index');
    }

    public function destroy(Manufacturer $device)
    {
        $device->delete();

        return redirect()->route('admin.manufacturers.index');
    }
}
