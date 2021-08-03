@extends('admin.master')
@section('title','Agregar Producto')


@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/products')}}" ><i class="fas fa-box-open"></i>Productos</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('/admin/product/add')}}" ><i class="fas fa-plus"></i>Agregar producto</a>
</li>
@endsection


@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-plus"></i>Agregar producto</h2>
        </div>
        <div class="inside">
         
          {!! Form::open(['url' => '/admin/product/add' ])!!}
          <div class="row">
              <div class="col-md-6">
                  <label for="name">Nombre del producto:</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                      
                  
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i>
                           </span>
                        
                        </div>
                        {!! Form::text('name',null,['class' => 'form-control'])!!}
                  </div>
              </div>
              
              
              <div class="col-md-3">
                  <label for="name">Categoria:</label>
              </div>
              
              
              <div class="col-md-3">
                  <label for="name">Imagen Destacada:</label>  
                  <div class="custom-file">
                  {!!Form::file('img',['class' => 'custom-file-input','id' => 'customFile' ])!!}
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  </div> 
              </div>
              
          </div>
          
          <div class="row mtop16">
              <div class="col-md-3">
                  <label for="price">Precio:</label>
                   <div class="input-group">
                      <div class="input-group-prepend">
                      
                  
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i>
                           </span>
                        
                        </div>
                        {!! Form::number('price',null,['class'=>'form.control','min' => '0.00','step' => 'any'])!!}
                  </div>
                  
              </div>
              
              <div class="col-md-3">
              
                  <label for="indiscount">¿En descuento?:</label>
                   <div class="input-group">
                      <div class="input-group-prepend">
                      
                  
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i>
                           </span>
                        
                        </div>
                        {!! Form::select('indiscount',['0' => 'No', '1' => 'Si'],0, ['class' => 'custom-select'])!!}
              </div>
              
          </div>
          
          
          
          
        <div class="col-md-3">
              
                  <label for="discount">Descuento:</label>
                   <div class="input-group">
                      <div class="input-group-prepend">
                      
                  
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i>
                           </span>
                        
                        </div>
                        {!! Form::number('discount',0.00,['class'=>'form.control','min' => '0.00','step' => 'any'])!!}
              </div>
              
          </div>
          
          <div class="row mtop16">
              <div class="col-md-12">
                  <label for="content">Descripcion</label>
                  {!! Form::textarea('content', null,['class'=> 'form-control','id' => 'editor'])!!}
              </div>
          </div>
          
          
          <div class="row mtop16">
              <div class="col-md-12">
                  {!! Form::submit('Guardar', ['class' => 'btn btn-success'])!!}
              </div>
          </div>
          
          
          
          {!! Form::close() !!}
           
        </div>
    </div>
</div>
@endsection