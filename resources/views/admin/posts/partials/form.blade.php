<div class='form-group'>
            {!! Form::label('name','Nombre')!!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del post'])!!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
<!--        <div class='form-group'>
            {!! Form::label('slug','slug')!!}
            {!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del post','readonly'])!!}

            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>-->
        <div class='form-group'>
            {!! Form::label('category_id','Categoria')!!}
            {!! Form::select('category_id',$categories,null,['class'=>'form-control'])!!}

            @error('category_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class='form-group'>
            <p class='front-weight-bold'>Etiquetas</p>

            @foreach ($tags as $tag)
            <label class='mr-2'>
                {!! Form::checkbox('tags[]',$tag->id,null)!!}
                {{$tag->name}}
            </label>
            @endforeach

            @error('tags')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class='form-group'>
            <p class='front-weight-bold'>Estado</p>
            <label>
                {!! Form::radio('status',1,true)!!}
                Borrador
            </label>
            <label>
                {!! Form::radio('status',2)!!}
                Publicado
            </label>
            @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class='form-group'>
            {!! Form::label('extract','Extracto')!!}
            {!! Form::textarea('extract', null,['class'=>'form-control'])!!}

            @error('extract')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class='form-group'>
            {!! Form::label('body','Cuerpo del post')!!}
            {!! Form::textarea('body', null,['class'=>'form-control'])!!}

            @error('body')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>