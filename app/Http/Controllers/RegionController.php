<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {

        $regions = Country::paginate(10);

        return view('backend.regions.index', compact('regions'));
    }
}
