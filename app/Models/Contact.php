<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use DatePresenter;

    /**
     * The table used by model
     *
     * @var string
     */
    protected $table = 'contacts';
}
