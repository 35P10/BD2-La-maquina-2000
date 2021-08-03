@extends('persona.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="" title="Create a _persona"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($persona as $_persona)
            <tr>
                <td>{{ $_persona->DNI_PERSONA }}</td>
                <td>{{ $_persona->NOMBRES }}</td>
                <td>{{ $_persona->APELLIDOS }}</td>
                <td>{{ $_persona->ID_SUCURSAL }}</td>
                <td></td>
                <td>
                    <form action="{{ route('persona.destroy',$_persona->DNI_PERSONA) }}" method="POST">   
                        <a class="btn btn-info" href="{{ route('persona.show',$_persona->DNI_PERSONA) }}">Show</a>    
                        <a class="btn btn-primary" href="{{ route('persona.edit',$_persona->DNI_PERSONA) }}">Edit</a>   
                        @csrf
                        @method('DELETE')      
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $persona->links() !!}

@endsection