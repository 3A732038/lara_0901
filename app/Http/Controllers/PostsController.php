<?php

namespace App\Http\Controllers;
use App\Models\Post;
class PostsController extends Controller
{
    public function index()
    {
        $posts=Post::Where('is_feature','1')->get();
        $data=['posts'=>$posts];
        return view('posts.index',$data);
    }

    public function show($id)
    {
        $data = ['id' => $id];

        return view('posts.show', $data);
    }
}
