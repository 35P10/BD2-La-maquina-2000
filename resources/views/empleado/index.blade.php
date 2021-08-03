<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="main_container">
        <H1>Iniciar sesion</H1>
        <form action="{{ route('producto.index') }}" method="POST">
           
                <label for="DNI">Ingrese DNI</label>
                <input id="DNI" name="DNI_persona">
                <BR>
                <label for="PASS">Ingrese Contraseña</label>
                <input id="PASS" type="password" name="password">
                <BR>
                <!--<button type="submit">Ingresar</button>-->
                <a class="ingresar" href="{{ route('producto.index') }}">Ingresar</a>
            
        </form>
        </section>
    </main>
</body>
</html>
