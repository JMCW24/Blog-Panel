<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    
        public function __construct() {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create' , 'store');
        $this->middleware('can:admin.posts.edit')->only('edit' , 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
        }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $post = Post::paginate(5);
        return view('admin.posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::pluck('name','id');
        $tags= Tag::all();
        return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
       $post= Post::create($request->all());
       if($request->tags){
         $post->tags()->attach($request->tags);
       }
       return redirect()->route('admin.post.edit',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories =Category::pluck('name','id');
        $tags= Tag::all();
        
         return view('admin.posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request,Post $post)
    {
        
        $post->update($request->all());
        
        if($request->tags){
            $post->tags()->sync($request->tags);
        }
        
        return redirect()->route('admin.post.edit',$post)->with('info','El post se actualizo correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('admin.post.index')->with('info','El post se elimino correctamente');
    }
}
