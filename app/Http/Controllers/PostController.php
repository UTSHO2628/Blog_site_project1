<?php

namespace App\Http\Controllers;

use App\Models\Post;  
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create()
    {
        return view('create');  
    }

    public function store(Request $request)
    {
    
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        
        return redirect('/');
    }

   
    public function index()
    {
        $posts = Post::all();  

     
        return view('index', compact('posts'));
    }

    public function show($id)
    {
       
        $post = Post::findOrFail($id);

      
        return view('show', compact('post'));
    }

 
    public function edit($id)
    {
 
        $post = Post::findOrFail($id);


        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
   
        $post = Post::findOrFail($id);

  
        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

  
        return redirect('/');
    }


    public function destroy($id)
    {

        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/');
    }
}

