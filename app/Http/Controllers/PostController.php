<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('posts.index', ['post' => $posts]);
    }

    public function show(Post $post){
       return view('posts.show',['post'=>$post]);
    }

    public function create(){
       /*Post miP = new Post();
        miP->id();
        miP->title = "Mi nuevo ";
        miP.save();*/
        return view('posts.create');    
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required']
        ]);

        $miP = new Post();
        $miP->title = $request->input('title');
        $miP->save();
        session()->flash('mensaje',"mi mensaje dato insertado");
        return to_route('posts.index');
    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'title' => ['required']
        ]);
    
        $post->title = $request->input('title');
        $post->save();
        session()->flash('mensaje',"Registro actualizado");
        return to_route('posts.show', $post);      
    }
    
    public function destroy(Post $post){
        $post->delete();
        return to_route('posts.index')->with('mensaje','dato eliminado');
    }
}
