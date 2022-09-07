<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Alert;
use App\Models\Client;

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
        // dd($request->all());
  
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'profession' => $request->profession,
            'contact' => $request->cnumber,
            'country_id' => $request->country,
            'message' => $request->message
        ]);

        Alert::success("Request Send Successfully!", "We have recieved your request, our expert will contact you soon!");

        return redirect()->back();
    }

}
