<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator,Str;


class CategoriesController extends Controller
{
    /*public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }*/
    public function getHome(){
        return view('admin.categories.home');
    }
    
   
    public function postCategoryAdd(Request $request){
        $rules = [
            'name' => 'required',
            'icon' => 'required',
        ];
        $messages = [
            'name.required' => 'Se requiere de un nombre para la categoria',
            'icon.required' => 'Se requiere de un icono para la categoria'
        ];
        
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','se ha producido un error','typealert','danger');
        else:
            $c = new Category;
            $c-> module =$request -> input('module');
            $c-> name =e($request -> input('name'));
            $c-> slug =Str::slug($request -> input('name'));
            $c-> icono =e($request -> input('icono'));
            if($c->save()):
                return back()->with('message','Guardado con exito','typealert','success');
            endif;
        endif;
    }
}
