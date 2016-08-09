<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The table used by the model
     * @var string
     */
    protected $table ='tags';

    /**
     * Many to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function posts()
    {
	return $this->belongsToMany('App\Models\Post');
    }
}
