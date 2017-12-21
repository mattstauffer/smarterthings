<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function show(Manufacturer $manufacturer)
    {
        return view('manufacturers.show')->with('manufacturer', $manufacturer);
    }
}
