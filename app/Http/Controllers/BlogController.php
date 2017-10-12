<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 

class BlogController extends Controller
{
    public function index() { 
    	$posts = Post::paginate(5);
    	
    	// select * from posts ;

    	return view('blogs.index', compact('posts'));
     }
    public function show($id) { 
    	$post = Post::find($id);
    	
    	// select * from posts ;

    	return view('blogs.show', compact('post'));
     }
}