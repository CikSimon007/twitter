<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(){
        request()->validate([
            'content' => 'required|min:1|max:225',
            
        ]);

        Post::create([
            'content' => request()->get('content', ''),
            'likes' => 0,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Post bol vytvoreny');
        
    }


    public function edit(Post $post) {
        return view('postEdit', ['post' => $post]); // Create a new view postEdit.blade.php for editing
    }
    
    public function update(Post $post){
        request()->validate([
            'content' => 'required|min:1|max:225',
            
        ]);

        $post->update([
            'content' => request()->get('content', ''),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Post bol upraveny');
        
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('dashboard.index')->with('success', 'Post bol zmazany');
    }

    public function view(Post $post) {
        return view('postView', ['post' => $post]);
    }
}
