@extends('adminlte::page')

@section('title', 'Lista de Posts')

@section('content_header')
<a class="btn btn-success btn-sm float-right"href="{{route('admin.post.create')}}">Nuevo post</a>
    <h1>Listado de post</h1>
@stop

@section('content')
@if(session('info'))
<div class='alert alert-success'>
    <strong>{{session('info')}}</strong>
</div>
@endif
      @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

