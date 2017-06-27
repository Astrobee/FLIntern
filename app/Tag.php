<?php

namespace App;

use App\Poem;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = ['name'];

    public function poems()
    {
    	return $this->belongsToMany(Poem::class);
    }

    public function getRouteKeyName()
    {
    	return 'name';
    }
}
