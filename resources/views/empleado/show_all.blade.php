<h1>
    Lista de empleados
</h1>

<form  action="{{ route('empleado.show')}}" method="get">   
@csrf
    <input name='DNI_EMPLEADO' value='0' placeholder="DNI de empleado">  
    <button type="submit">Buscar</button>
</form>

<table class="table table-bordered table-responsive-lg">
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Sucursal Asignada</th>
            <th>Actions</th>
        </tr>
        @foreach ($empleado as $_empleado)
            <tr>
                <td>{{ $_empleado->DNI_EMPLEADO }}</td>
                <td>{{ $_empleado->NOMBRES }}</td>
                <td>{{ $_empleado->APELLIDOS }}</td>
                <td>{{ $_empleado->ID_SUCURSAL }}</td>
                <td>
                    <form>   
                    <a href="{{ route('empleado.show', $_empleado->DNI_EMPLEADO) }}">Ver</a>  
                        <a >Edit</a>   
                        @csrf
                        @method('DELETE')      
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $empleado->links() !!}


    