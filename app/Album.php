<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    public $timestamps = false;

    public function support()
    {
        return $this->belongsTo('App\Support');
    }

    public function label()
    {
        return $this->belongsToMany('App\Label', 'albums_labels');
    }

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}
