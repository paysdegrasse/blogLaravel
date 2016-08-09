<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Comment extends Model
{
    use DatePresenter;

    /**
     * The table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * One to Many Relation
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
	return $this->belongsTo('App\Models\User');
    }

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
	return $this->belongsTo('App\Models\Post');
    }
}
