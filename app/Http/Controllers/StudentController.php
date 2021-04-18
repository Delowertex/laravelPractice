<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class StudentController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function addPostSubmit(Request $request){
        $std = new Post();
        $std->title = $request->title;
        $std->body = $request->body;
        $std->save();
        return back()->with('post_inserted', 'Post has been added successfully');
     }

    public function getPost(){
         $post = Post::all();
         return view('posts', compact('post'));
    }

    public function getPostById($id){
        $posts = Post::where('id', $id)->first();
        return view('single-post', compact('posts'));
    }

    public function deletepost($id){
        Post::where('id', $id)->delete();
        return back()->with('delete_post', 'Post has been deleted successfully');
    }
}




