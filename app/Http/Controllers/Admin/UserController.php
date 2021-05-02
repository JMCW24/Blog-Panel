<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit' , 'update');
        }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        
        return redirect()->route('admin.users.index', compact('user'))->with('info','Se asignaron los roles correctamente');
    }

        public function create(User $user)
    {
 
            
        return view('admin.users.create', compact('user'));
    }

    public function store(UserCreateRequest $request,User $user)
    {
     
        $user = User::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('admin.users.edit', compact('user'))->with('info', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
        // $user = User::findOrFail($id);
        // dd($user);
        return view('admin.users.index', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info', 'Usuario eliminado correctamente');
    }
}
