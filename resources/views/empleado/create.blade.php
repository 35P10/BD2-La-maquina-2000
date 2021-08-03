<html>
<header>
    <h1>
        Registrar empleado
    </h1>
</header>
<main>
<form action="{{ route('empleado.store') }}" method="POST">
    @csrf
  
    <label>DNI:</label>
    <input name="DNI_persona" placeholder="Enter Title">
    <br>
    <label>Nombres:</label>
    <input name="nombres" placeholder="nombre">
    <br>
    <label>Apellidos:</label>
    <input name="apellidos" placeholder="Enter Description">
    <br>
    <label>telefono:</label>
    <input name="apellidos" placeholder="Enter Description">
    <br>
    <label>email:</label>
    <input name="email" placeholder="Enter Description">
    <br>
    <label for="ID_sucursal">ID_sucursal:</label>
    <select name="ID_sucursal" id="ID_sucursal">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>
    <label>hora entrada:</label>
    <input name="hora_entrada" placeholder="Entrar ">
    <br>
    <label>hora salida:</label>
    <input name="hora_salida" placeholder="Entrar ">
    <br>
    <label for="cargo">cargo:</label>
    <select name="cargo" id="cargo">
    <option value="1">vendedor</option>
    <option value="2">cajero</option>
    </select>
    <br>
    <label>sueldo:</label>
    <input name="sueldo" placeholder="sueldo ">
    <br>
    <button type="submit">Registrar</button>
    
  
</form>
</main>

</html>