<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;

class ArtistController extends Controller
{
    public function display() {
        $artists = Artist::all();
        return view('artists', ['artists' => $artists]);
    }
}
