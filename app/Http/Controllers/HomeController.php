<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\GhostWritingServices;
use App\Models\Service;
use Illuminate\Support\Facades\Artisan;
use LSCache;

class HomeController extends Controller
{
    public function __construct()
    {
        LSCache::purge('*', $stale = false);
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
    public function beauty()
    {
        return view('frontend.ghostwriting.beauty');
    }
    public function business()
    {
        return view('frontend.ghostwriting.business');
    }
    public function fantasy()
    {
        return view('frontend.ghostwriting.fantasy');
    }
    public function medical()
    {
        return view('frontend.ghostwriting.medical');
    }
    public function screenplay()
    {
        return view('frontend.ghostwriting.screenplay');
    }
    public function nonfiction()
    {
        return view('frontend.ghostwriting.nonfiction');
    }
    public function blog()
    {
        return view('frontend.ghostwriting.blog');
    }

    public function terms()
    {
        return view('frontend.termspolicy.termsconditions');
    }
    public function privacy()
    {
        return view('frontend.termspolicy.privacypolicy');
    }

    public function change($val)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            
            file_put_contents($path, file_get_contents($path) . "\r\n" . 'DB_DATABASE' . '=' . $val);
        }


        return redirect()->back();
    }
}
