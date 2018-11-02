<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CommentReceived;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function store($postId)
    {
        $post = Post::findOrFail($postId);
        
        $this->validate(
            request(),
            Comment::VALIDATION_RULES
           );
          
        $post->comments()->create(
            request()->all()
        );
        
        Mail::to($post->author->email)->send(new CommentReceived($post));

        //return redirect('/posts/' . $postId);
        
        return redirect("/posts/{$postId}");
    }
    public function destroy($postId, $commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();

        return redirect("/posts/{$postId}");
    }
}
