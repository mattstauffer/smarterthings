<?php

namespace App\Http\Controllers;

use App\DeviceHandler;
use Illuminate\Http\Request;

class DeviceHandlerController extends Controller
{
    public function show(DeviceHandler $handler)
    {
        return $handler;
    }
}
