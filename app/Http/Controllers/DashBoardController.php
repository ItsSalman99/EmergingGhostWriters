<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Country;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        $TClients = Client::count();
        $TCountry = Country::count();

        return view('backend.index', compact('TClients', 'TCountry'));
    }
}
