@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>Editar nuevo Post</h1>
@stop

@section('content')

    @if(session('info'))
    
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong> 
        </div>
    
    @endif

    <div class="card">
    <div class="card-body">
        {!! Form ::model($post,['route'=>['admin.post.update',$post],'autocomplete'=> 'off','files'=>true,'method'=>'put'])!!}

        {!! Form::hidden('user_id',auth()->user()->id)!!}
        
        @include('admin.posts.partials.form')

        {!! Form::submit('Actualizar post',['class'=>'btn btn-primary'])!!}


        {!! Form::close()!!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

