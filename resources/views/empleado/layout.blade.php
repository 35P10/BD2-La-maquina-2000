
<!DOCTYPE html>
<html lang="es">
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
        @yield('content')

    </section>

    <slide class="section_derecha">
        <div class="logo"></div>
    </slide>
   </main>

</body>
</html>