<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Coment;

class PostController extends Controller
{
    public function addPost(){
        $post = new Post();
        $post->title = "second Post title";
        $post->body = "second body description";
        $post->save();
        return "Post has been created succefully";
    }

    public function addComment($id){
        $post = Post::find($id);
        $coment = new Coment();
        $coment->coment="First comment here";
        $post->coment()->save($coment);
        return "coment has been posted"; 
    }
}
