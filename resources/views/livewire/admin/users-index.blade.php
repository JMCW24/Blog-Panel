<div>
    <div class="card">
        <div class="card-header">
            <input wire:model='search' class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        @if($users ->count())
        <div class="card-body">
            <table class='table table-striped'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @can('admin.users.edit')
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                        @endcan
                        </td>
                        <td width="10px">
                            @can('admin.users.destroy')
                            <form action="{{route('admin.users.destroy',$user)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                            @endcan
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>

        @else
        
        <div class="card-body">
            <strong>No hay Registros</strong>
        </div>
        
        @endif
    </div>
</div>
