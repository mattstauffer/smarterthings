<?php

namespace App\Http\Controllers;

use App\DeviceHandler;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $term = request('q');

        return view('results')
            ->with('term', $term)
            ->with('results', DeviceHandler::where('title', 'like', "%$term%")->get());
    }
}
