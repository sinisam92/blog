<?php

namespace Tests\Unit;

use App\User;
use App\Post;
use App\Comment;
use App\Tag;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostsTableValid()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['author_id' => $user->id]);

        
        $this->assertDatabaseHas('posts', ['title' => $post->title]);
    }
    public function testCommentsTableValid()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['author_id' => $user->id]);
        $post->comments()->saveMany(factory(Comment::class, 10)->make());

        $this->assertEquals(10, $post->comments()->count());
    }
    public function testTagsTableValid()
    {
        $tags = factory(Tag::class)->create();
        $this->assertDatabaseHas('tags', ['name' => $tags->name]);
    }
}
