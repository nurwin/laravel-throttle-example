<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function index() {
    	$posts = Post::all();
    	return response()->json($posts);
    }
}
