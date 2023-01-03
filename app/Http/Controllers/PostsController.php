<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Posts::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'caption' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,svg'
        ]);

        $image = $request->file('image');

        $imageName = $image->getClientOriginalName();
  
        $filePath = (public_path('images'));
        $img = Image::make($image->path());
        $img->resize(100,100, function ($const){
            $const->aspectRatio();
        })->save($filePath.'/'.$imageName);

        $filePath = public_path('/images');

        $image->move($filePath, $imageName);

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imageName
        ]);
        
        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }
}
