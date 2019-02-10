<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	//$id = Auth::user()->id;
		//$posts = Post::where('user_id', $id)->get();

    	// relationship
    	//$posts = Auth::user()->posts;

    	return view('admin.dashboard')
    		->with('allposts', Auth::user()->posts);
    }
}
