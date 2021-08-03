@extends('empleado.layout')
@section('content')
<h1>Empleado</h1>

    <div class="section_izquierda_contenido">

        <p>DNI</p><p> {{$empleado->DNI_EMPLEADO }} </p>
        <p>Nombres</p><p> {{ $empleado->NOMBRES }} </p>
        <p>Apellido</p><p> {{ $empleado->APELLIDOS }}</p>
        <p>Apellido</p><p> {{ $empleado->TELEFONO }}</p>
        <p>Apellido</p><p> {{ $empleado->EMAIL }}</p>
        <p>Horario</p>
                <p> {{ $empleado->ID_SUCURSAL }}</p>
                <p> {{ $empleado->HORA_ENTRADA }}</p>
        <p>Apellido</p><p> {{ $empleado->HORA_SALIDA }}</p>
        <p>Sueldo</p><p> {{ $empleado->SUELDO }}</p>

    </div>

<a class="ingresar" href="{{ route('home.index') }}">Volver a inicio</a>
@endsection
