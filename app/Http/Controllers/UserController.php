<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    
    public function create(){
        return view('admin.users.addUser');
    }


    public function store(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        $user->password = bcrypt($request->email);
        $user->save();

        return Redirect::to('users');
    }

        public function show($id){
        $user = User::find($id);
        return view('admin.users.editUser', ['user' => $user]);
    }
    
    public function update($id, Request $request) {
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        if($request->pass != ''){
            $user->password = bcrypt($request->pass);
        }
        $user->save();

        return Redirect::to('users');
    }
    
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return Redirect::to('users');
    }
}
