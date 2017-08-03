<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\About;
class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $about = About::all()->first();
        return view('admin.users.about', ['about' => $about]);
    }
    public function update($id) {
        return view('admin/users/about');
    }

}
