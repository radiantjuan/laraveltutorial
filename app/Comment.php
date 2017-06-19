<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;\
use App\Model;

class Comment extends Model
{
    //
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
