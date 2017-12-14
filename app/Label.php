<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = 'labels';
    public $timestamps = false;

    public function album()
    {
        return $this->belongsToMany('App\Album', 'albums_labels');
    }
}
