<?php

namespace App;
use Auth;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];
    
    public function user () {
        return $this->belongsTo(User::class);
    }
    
    public function comments () {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {
        $this->comments()->create([
            'body' => $body,
            'user_id' => Auth::user()->id
        ]);
    }
}
