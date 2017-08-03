<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    public function index()
    {
        $posts = Post::all();
        return view('admin/users/posts', ['posts'=> $posts]);
    }
}
