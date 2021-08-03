<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1>
        Buscar Empleado
    </h1>
</header>
<main>
    
    <form action="{{ route('empleado.show', $DNI_persona=DNI_cliente)}}" method="get">
    <h3>
        Ingresar DNI
    </h3>
    <input name="DNI_empleado">

    <button type="submit">Registrar</button>
    </form>
</main>
</body>
</html>