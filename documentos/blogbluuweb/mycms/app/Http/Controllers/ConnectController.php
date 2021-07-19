<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function getLogin(){
        //return 'Hola Yasmin';
        return view('connect.login');
    }
}
