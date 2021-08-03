<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>INICIO</h1>
    <a class="btn btn-primary" href="{{ route('home.index') }}"> Cerrar Sesion</a>
    </header>
    <main>
        <section class="main_container">
            <h3>Clientes</h3>
            <div class="main_container_options">
                <a href="{{ route('cliente.create') }}">Registrar Cliente</a>
                <a  href="{{ route('buscar') }}" >Buscar Cliente</a>
            </div>
        </section>
        <section class="main_container">
        <h3>Ventas de Productos</h3>
            <div class="main_container_options">
                <a>Catalogo de Productos</a>
                <a>Factura</a>
                <a>Devoluciones</a>
            </div>
        </section>
        <section class="main_container">
        <h3>Empleados</h3>
        <div class="main_container_options">
            <a href="{{ route('empleado.create') }}">Registrar empleado</a>
            <a href="{{ route('show_all') }}">Listar empleado</a>
            <a>Vales de empleado</a>
        </div>
        </section>
        <section class="main_container">
        <h3>Reservas</h3>
        <div class="main_container_options">
            <a>Reserva producto</a>
            <a>Ver reservas</a>
        </div>
        </section>
        <section class="main_container">
        <h3>Consultas</h3>
        <div class="main_container_options">
            <a>Registrar empleado</a>
            <a>Listar empleado</a>
            <a>Buscar empleado</a>
        </div>
        </section>
    </main>
</body>
</html>
