<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{   
    protected $table = 'supports';
    public $timestamps = false;

    public function album()
    {
        return $this->hasMany('App\Album');
    }
}
