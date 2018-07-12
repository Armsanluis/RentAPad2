<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('search');

        $posts = Post::where('location', 'LIKE', "%$query%")->paginate(5);
        
        return view('pages.results')->with('posts', $posts);
    }   
}
