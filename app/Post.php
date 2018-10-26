<?php

namespace App;

use App\User;
use App\Comment; //povezivanje sa comments za komentare
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];

    const VALIDATION_RULES = [
        'title' => 'required',
        'body' => 'required | min:25',
        'published' => 'required'
    ];

    public static function getPublishedPosts()
    {
        return Post::where('published', true)->get();
    }
    public function author()
    {
        //dodajemo 'author_id' da laravel zna sa kojom kolonom da poveze u bazi
        return $this->belongsTo(User::class, 'author_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
