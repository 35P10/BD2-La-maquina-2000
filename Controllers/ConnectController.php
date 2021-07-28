<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Hash;//para no guardar en texto plano de password
use App\Models\User;


class ConnectController extends Controller
{
    //
    public function getLogin(){
        //return 'Hola Yasmin';
        return view('connect.login');
    }
    
    public function postLogin(Request $request){
        $rules=[
            'email'=>'required|email',
            'password'=>'required|min:8'
            
        ];
        $messages=[
            'email.required'=>'Su correo electronico es requerido',
            'email.email'=>'El formato de correo es invalido',
            'password.required'=>'Ingrese contraseña requerida',
            'password.min'=>'Contraseña con minimo 8 caracteres'
        ];
        
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','se ha producido un error','typealert','danger');
        else:
        endif;
    }
    
    public function getRegister(){
        
        return view('connect.register');
    }
    
    public function postRegister(Request $request){
        $rules =[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password'
        ];
        
        $messages=[
          'name.required'=>'Su nombre es requerido',
          'lastname.required'=>'Su apellido es requerido',
          'email.required'=>'Su correo electronico es requerido',
          'email.email'=>'El formato de correo es invalido',
          'email.unique'=>'Ya existe un usuario registrado con este correo electronico',
          'password.required'=>'Ingrese contraseña',
          'password.min'=>'Contraseña con minimo 8 caracteres',
          'cpassword.required'=>'Ingrese contraseña',
          'cpassword.min'=>'Confirmar contraseña',
          'cpassword.same'=>'Ingrese contraseña'
          
          
          
          

        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','se ha producido un error','typealert','danger');
        else:
            $user=new User;
            $user->name=e($request->input('name'));
            $user->lastname=e($request->input('lastname'));
            $user->email=e($request->input('email'));
            $user->password=Hash::make($request->input('password'));
            if($user->save()):
                return redirect('/login')->with('message','Su usuario se registro exitosamente')->with('typealert','success');
            endif;
        endif;
    }
}
