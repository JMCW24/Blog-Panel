@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')

        

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Usuario</h4>
            </div>
            <div class="card-body">
         {!! Form::open(['route'=> 'admin.users.store'])!!}
        <div class='form-group'>
            {!! Form::label('name','Nombre')!!}
            {!! Form:: text('name','',['class'=> 'form-control', 'placeholder'=>'Ingrese el nombre'])!!}
            
            @error('name')
            <small class='text-danger'>{{$message}}</small>
            @enderror
        </div>
         <div class='form-group'>
            {!! Form::label('email','Correo')!!}
            {!! Form:: text('email','',['class'=> 'form-control', 'placeholder'=>'Ingrese su correo electronico'])!!}
            
            @error('email')
            <small class='text-danger'>{{$message}}</small>
            @enderror
        </div>
         <div class='form-group'>
            {!! Form::label('password','Contraseña')!!}
            <br>
            {!! Form::password('password',['class'=> 'awesome', 'placeholder'=>'Ingrese la contraseña'])!!}
            
            @error('password')
            <small class='text-danger'>{{$message}}</small>
            @enderror
        </div>
         
        {!! Form::submit('Crear Usuario',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close()!!}
          </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop