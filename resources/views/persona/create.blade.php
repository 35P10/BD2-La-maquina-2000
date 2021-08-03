@extends('persona.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('persona.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('persona.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DNI_persona:</strong>
                <input type="text" name="DNI_persona" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div>
            <div>
                <strong>nombres:</strong>
                <textarea class="form-control" style="height:150px" name="nombres" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div>
            <div>
                <strong>apellidos:</strong>
                <textarea class="form-control" style="height:150px" name="apellidos" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div>
            <div>
                <strong>ID_sucursal:</strong>
                <textarea class="form-control" style="height:150px" name="ID_sucursal" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection