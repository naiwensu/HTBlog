<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $table = 'diaries';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function medium()
    {
        return $this->hasMany('App\Media' );
    }

}
