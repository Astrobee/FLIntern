<?php

namespace App;

use App\Comment;
use App\Tag;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    protected $fillable = ['title','body'];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
}


