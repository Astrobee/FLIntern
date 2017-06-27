<?php

namespace App;

use App\Comment;
use App\Photo;
use App\Poem;
use App\Quote;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','bio','city','region','sex','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function poems()
    {
        return $this->hasMany(Poem::class);
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

    public function comment()
    {
        $this->hasMany(Comment::class);
    }
}
