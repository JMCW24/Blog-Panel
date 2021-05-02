@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
<h1>Crear nuevo Post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form ::open(['route'=>'admin.post.store','autocomplete'=> 'off'])!!}

        {!! Form::hidden('user_id',auth()->user()->id)!!}
        
        @include('admin.posts.partials.form')

        {!! Form::submit('Crear post',['class'=>'btn btn-primary'])!!}


        {!! Form::close()!!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

<!--<script>
$(document).ready(function () {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
});
ClassicEditor
        .create(document.querySelector('extract'))
        .catch(error => {
            console.error(error);
        });
ClassicEditor
        .create(document.querySelector('body'))
        .catch(error => {
            console.error(error);
        });
</script>-->

@endsection