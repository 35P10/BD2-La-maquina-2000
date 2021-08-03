<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /*public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }*/
    
    public function getUsers(){
        $users = User::orderBy('id', 'Desc')->get();
        $data=['users'=>$users];
        return view('admin.users.home',$data);
    }
    
    /*
    public function GetUsers()
    {
        $users = User::OrderBy('id','DESC')->Get();
        return view('admin.users.index', compact('users'));
    }*/


}
