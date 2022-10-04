<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{

    public function blogs()
    {
        $posts = Post::all();

        return view('backend.blog.index', compact('posts'));
    }

    public function blogDetails($id)
    {
        $post = Post::where('id', $id)->first();

        $otherposts = Post::inRandomOrder()->limit(2)->get();

        return view('frontend.blog.details', compact('post', 'otherposts'));
    }

    //Back end works

    public function index()
    {

        $posts = Post::all();

        return view('frontend.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'required|image|mimes:png,jpg',
            'title' => 'required|',
            'summary' => 'required',
            'body' => 'required'
        ]);


        $filename = time() . '.' . $request->image->extension();
        // dd(public_path('assets/frontend/img/news/news-feeds/'));
        $request->image->move(public_path('assets/frontend/img/news/news-feeds/'), $filename);

        Post::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'paragraph' => $request->body,
            'img' => 'assets/frontend/img/news/news-feeds/' . $filename
        ]);

        Alert::success("Post Created Successfully!", "Kudos! Your post has been published");

        return redirect()->back();
    }
}
