<?php

namespace App;

use App\Poem;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = ['body'];

    public function post()
    {
    	return $this->belongsTo(Poem::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
