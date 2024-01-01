<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function postList()
    {
        $posts = Post::with('comments')
            ->get();
        return  $posts;
        return view('postManagement.list',compact('posts'));
    }


    public function show($id)
    {
//        $post = DB::table('posts')->where('id',$id)->first();
        $post = Post::with('comments')
            ->find($id);
        $title = $post ? $post->title : '';
        return view('postManagement.show',compact('post','title'));
    }

    public function create()
    {
        return view('postManagement.create');
    }

    public function storePost(CreatePostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'test' => 'test'
        ]);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->find($id);
        return view('postManagement.edit',compact('post'));
    }

    public function updatePost(UpdatePostRequest $request, $id)
    {
        DB::table('posts')->where('id',$id)
            ->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('post.index');
    }


    public function delete($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->back();
    }

}
