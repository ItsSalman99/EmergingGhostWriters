<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return View('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        $services  = Service::paginate(6);

        return view('frontend.services')->with([
            'services' => $services
        ]);
    }

    public function service($id)
    {
        $service = Service::where('id', $id)->first();

        return view('frontend.service')->with([
            'service' => $service
        ]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

}
