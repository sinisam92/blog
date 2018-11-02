<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCommentReceivedValid()
    {
       

        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['author_id' => $user->id]);

        
        Mail::fake();

        $this->actingAs($user)->post('/posts/' . $post->id . '/comments', ['text' => 'this is some textojsdangoansdgonaousdng', 'author' => 'Djokap']);

        
        Mail::assertSent(CommentReceived::class, function($mail) use ($post) {

            return $mail->post->id === $post->id;
        });
    }
    public function testCommentReceivedInvalid()
    {

        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['author_id' => $user->id]);

        
        Mail::fake();

        $this->actingAs($user)->post('/posts/' . $post->id . '/comments', ['text' => 'this is some textojsdangoansdgonaousdng']);

        
        Mail::assertNotSent(CommentReceived::class, function($mail) use ($post) {

            return $mail->post->id === $post->id;
        });
    }
}
