<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Quote extends Model
{
    protected $fillable = ['title', 'body'];

    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }


}
