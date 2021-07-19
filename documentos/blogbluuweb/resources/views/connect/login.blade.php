@extends('connect.master')
@section('title','Login')
@section('content')
<div class="box box_login shadow">
  <div class="header">
      
      <a href="{{url('/')}}">
      <img src="{{url('/static/images/logo.png')}}">
      </a>
  </div>
   
   <div class="inside"> 
            {!! Form::open(['url'=>'/login']) !!}
            <label for="email">Correo electronico:</label>
            <div class="input-group">

               <div class="input-group-prepend">
                   <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
               </div>
                {!! Form::email('email',null,['class'=> 'form-control'])!!}
            </div>



            <label for="email" class="mtop16">Password:</label>
            <div class="input-group">

               <div class="input-group-prepend">
                   <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
               </div>
                {!! Form::password('password',['class'=> 'form-control'])!!}
            </div>


            {!! Form::submit('Ingresar',['class'=>'btn btn-success mtop16']) !!}

            {!! Form::close() !!}
            <div class=" footer mtop16">
                <a href="{{url('/registrar')}}">Registrarse</a>
                <a href="{{url('/recover')}}">Olvido contraseña</a>
            </div>
        </div>
        
</div>
@stop