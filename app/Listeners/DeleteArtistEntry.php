<?php

namespace App\Listeners;

use App\Events\ArtistDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteArtistEntry
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArtistDeleted  $event
     * @return void
     */
    public function handle(ArtistDeleted $event)
    {
        $event->artist->album()->update(['artist_id' => null]);
    }
}
