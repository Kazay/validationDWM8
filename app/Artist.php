<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ArtistDeleted;

class Artist extends Model
{
    protected $table = 'artists';
    public $timestamps = false;

    protected $events = [
        'deleted' => ArtistDeleted::class,
    ];

    public function album()
    {
        return $this->hasMany('App\Album');
    }
}
