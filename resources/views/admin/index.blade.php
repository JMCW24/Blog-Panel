@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Panel de control</h1>
@stop

@section('content')
        @if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    <div class="justify-center">
    <a class='btn btn-info btn-lg' href='{{route('admin.users.index')}}'>Ver lista de usuarios</a>
    <br>
    <a class='btn btn-info btn-lg mt-2' href='{{route('admin.categories.index')}}'>Ver lista de categorias</a>
    <br>
    <a class='btn btn-info btn-lg mt-2' href='{{route('admin.tag.index')}}'>Ver lista de etiquetas</a>
    <br>
    <a class='btn btn-info btn-lg mt-2' href='{{route('admin.post.index')}}'>Ver lista de posts</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop