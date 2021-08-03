<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
   <main>

    <section class="section_izquierda">
    <h1>Cliente</h1>
    <div class="section_izquierda_contenido">
        <p>DNI</p><p> {{$cliente->DNI_PERSONA }} </p>
        <p>Nombres</p><p> {{ $cliente->NOMBRES }} </p>
        <p>Apellido</p><p> {{ $cliente->APELLIDOS }}</p>
    </div>
    <a class="ingresar" href="{{ route('home.index') }}">Vovler a inicio</a>

    </section>

    <slide class="section_derecha">
        <div class="logo"></div>
    </slide>
   </main>

</body>
</html>




