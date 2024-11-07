<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, Post $post){
        $request->validate([
            'content'=>'required|min:1|max:255',
        ]);
        $post->comments()->create([
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment was added');
    }
}
