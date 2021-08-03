@extends('cliente.layout')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añadir nuevo cliente</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home.create') }}"> Volver</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   

<form action="{{ route('cliente.store') }}" method="POST">
    @csrf
  
    <strong>DNI:</strong>
    <input name="DNI_persona" placeholder="Enter Title">
    <br>
    <strong>Nombres:</strong>
    <input name="nombres" placeholder="nombre">
    <br>
    <strong>Apellidos:</strong>
    <input name="apellidos" placeholder="Enter Description">
    <br>
    <strong>ID_sucursal:</strong>
    <input name="ID_sucursal" placeholder="Entrar ">
    <br>
    <button type="submit">Registrar</button>

   
</form>

@endsection