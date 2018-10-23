<?php

namespace App;

use App\Comment; //povezivanje sa comments za komentare
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'title', 'body', 'published'
    ];

    const VALIDATION_RULES = [
        'title' => 'required',
        'body' => 'required | min:25',
        'published' => 'required'
    ];

    public static function getPublishedPosts()
    {
        return Post::where('published', true)->get();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
