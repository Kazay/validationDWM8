<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Album;
Use App\Support;
Use App\Label;
Use App\Artist;

class AlbumController extends Controller
{
    public function display() {
        $supportsAll = Support::all();
        $supports = [];
        foreach ($supportsAll as $value) {
            $supports[$value->id] = $value->name;
        }
        $labelsAll = Label::all();
        $labels = [];
        foreach ($labelsAll as $value) {
            $labels[$value->id] = $value->name;
        }
        $artistsAll = Artist::all();
        $artists = [];
        foreach ($artistsAll as $value) {
            $artists[$value->id] = $value->name;
        }
        $albums = Album::all();
        return view('albums', ['albums' => $albums, 'supports' => $supports, 'labels' => $labels, 'artists' => $artists]);
    }
}
