<?php

namespace App;

use App\Post; //povezivanje sa postom za komentare
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $guarded = ['id'];

   const VALIDATION_RULES =  [
    'author' => 'required | max:10 | string',
    'text' => 'required | min:15'

   ];

   public function post()
   {
       return $this->belongsTo(Post::class);
   }


}
