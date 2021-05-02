@extends('adminlte::page')

@section('title', 'Lista de Usuarios')

@section('content_header')
@can('admin.users.create')
<a class='btn btn-success btn-sm float-right' href='{{route('admin.users.create')}}'>Nuevo Usuario</a>
@endcan 
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
