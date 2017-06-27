<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

	protected $fillable = ['id','name','path'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
