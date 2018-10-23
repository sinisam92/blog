<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $guarded = ['id'];

   public function post()
   {
       return $this->bilongsTo(Post::class);
   }


}
