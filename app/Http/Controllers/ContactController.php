<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Alert;

class ContactController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('frontend.contact')->with([
            'countries' => $countries
        ]);
    }

    public function store(Request $request)
    {

        Alert::success("Request Send Successfully!", "We have recieved your request, our expert will contact you soon!");

        return redirect()->back();
    }

}
