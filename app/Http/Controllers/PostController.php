<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post.created');
    }
    public function store(Request $request)
    {
        post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'author_id'=>auth()->user()->id
        ]);
        return redirect()->route('post.index');
    }
}
