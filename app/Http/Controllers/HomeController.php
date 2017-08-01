<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function postCreatePost(Request $request){
        // dd($request->user()->posts());
        // validation
        $post = new Post();
        $post->body = $request['body'];
        $request->user()->posts()->save($post);

        return redirect()->route('home');
    }

}
