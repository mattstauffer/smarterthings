<?php

namespace App\Http\Controllers;

use App\DeviceHandler;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $term = request('q');

        return DeviceHandler::where('title', 'like', "%$term%")->get();
    }
}
