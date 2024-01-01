<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function createComment($id)
    {
        $post  = Post::find($id);
        return view('comment.create',compact('post'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate(['comment'=>'required']);
//        $request->merge(['post_id'=>$id]);

        Comment::create([
            'comment' => $request->comment,
            'post_id' => $id
        ]);

        return redirect()->route('post.index');
    }
}
