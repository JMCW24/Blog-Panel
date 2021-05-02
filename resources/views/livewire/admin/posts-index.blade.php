<div class="card">
    <div class="card-header">
        <input wire:model='search' class='form-control' placeholder='Ingrese nombre de un posts'>  
    </div>
    @if($posts ->count())  
    <div class="card-body">
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                   <td>{{$post->id}}</td>
                   <td>{{$post->name}}</td>
                   <td width='10 px'>
                       <a class="btn btn-primary btn-sm" href="{{route('admin.post.edit',$post)}}">editar
                   </td>
                   <td width='10 px'>
                       <form action="{{route('admin.post.destroy',$post)}}" method="POST">
                           @csrf
                           @method('delete')
                           
                           <button class='btn btn-danger btn-sm' type='Eliminar'>Eliminar</button>
                       </form> 
                   </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$posts ->links()}}
    </div>
    @else
    <div class="card-body">
    <strong>No existen registros</strong>
    </div>  
    @endif   
</div>
