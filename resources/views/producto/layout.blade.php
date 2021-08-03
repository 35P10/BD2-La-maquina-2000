<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<header>
<a href="{{ route('cliente.create') }}">Registrar</a>
</header>
<div class="container">
    @yield('content')
</div>

</body>
</html>