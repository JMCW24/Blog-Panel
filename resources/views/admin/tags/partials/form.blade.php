<div class='card'>
    <div class='card-body'>
        {!! Form::open(['route'=> 'admin.tag.store'])!!}
        <div class='form-group'>
            {!! Form::label('name','Etiqueta')!!}
            {!! Form:: text('name',null,['class'=> 'form-control', 'placeholder'=>'Ingrese etiqueta'])!!}
            
            @error('name')
            <small class='text-danger'>{{$message}}</small>
            @enderror
        </div>
<!--        <div class='form-group'>
            {!! Form::label('slug','slug')!!}
            {!! Form:: text('slug','null',['class'=> 'form-control', 'placeholder'=>'vista','readonly'])!!}
            
            @error('slug')
            <small class='text-danger'>{{$message}}</small>
            @enderror
        </div>-->
        <div class='form-group'>
            {!! Form::label('color:')!!}
            {!! Form::select('color',$colors,null,['class'=>'form-control'])!!}
            
            @error('color')
            <small class='text-danger'>{{$message}}</small>
            @enderror
        </div>
        </div>
    </div>
