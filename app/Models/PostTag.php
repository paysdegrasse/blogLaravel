<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    /**
     * The table used b the model
     *
     * @var string
     */
    protected $table = 'post_tag';

    /**
     * The timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}
