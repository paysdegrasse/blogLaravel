<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Datepresenter;

    /**
     * The table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
	return $this->belongsTo('App\Models\User');
    }

    /**
     * Many to many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function tags()
    {
	return $this->belongsToMany('App\Models\Tag');
    }

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function comments()
    {
	return $this->hasMany('App\Models\Comment');
    }
}
