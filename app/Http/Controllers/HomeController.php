<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\GhostWritingServices;
use App\Models\Service;
use LSCache;

class HomeController extends Controller
{
    public function __construct() {
        LSCache::purge('*', $stale=false);
    }

    public function index()
    {
        $countries = Country::cursor();

        return view('frontend.index')->with([
            'countries' => $countries
        ]);
    }

    public function about()
    {
        $countries = Country::cursor();

        return view('frontend.about')->with([
            'countries' => $countries
        ]);
    }

    public function services()
    {
        $services  = Service::paginate(6);

        return view('frontend.services')->with([
            'services' => $services
        ]);
    }

    public function book_writing()
    {
        return view('frontend.services.book-writing');
    }
    public function book_publishing()
    {
        return view('frontend.services.book-publishing');
    }
    public function book_marketing()
    {
        return view('frontend.services.book-marketing');
    }
    public function book_formating()
    {
        return view('frontend.services.book-formating');
    }
    public function video_booktrailers()
    {
        return view('frontend.services.video_book');
    }
    public function social_mediamarketing()
    {
        return view('frontend.services.social-media');
    }

    public function InteractiveEbooks()
    {
        return view('frontend.services.interactive-ebook');
    }

    public function CreativeWriting()
    {
        return view('frontend.services.creative-writing');
    }
    public function PressReleaseWriting()
    {
        return view('frontend.services.pressrelease');
    }
    public function Editing_ProofReading()
    {
        return view('frontend.services.editingproofreading');
    }
    public function BookCoverDesign()
    {
        return view('frontend.services.book-cover');
    }
    public function AmazonMarketing()
    {
        return view('frontend.services.amazon-marketing');
    }
    public function SeoWriting()
    {
        return view('frontend.services.seo-writing');
    }
    public function AudioBooks()
    {
        return view('frontend.services.audio-books');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function ghostWritingServices()
    {
        $ghostwritingservices = GhostWritingServices::paginate(6);

        return view('frontend.ghostwriting-services')->with([
            'ghostwritingservices' => $ghostwritingservices
        ]);
    }

    public function fiction()
    {
        return view('frontend.ghostwriting.fiction');
    }

    public function ghostWritingService($id)
    {
        $ghostwritingservice = GhostWritingServices::where('id', $id)->first();

        return view('frontend.ghostwriting-service')->with([
            'ghostwritingservice' => $ghostwritingservice
        ]);
    }
}
