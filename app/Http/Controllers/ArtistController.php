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

    public function add(Request $request) {
        $artist = new Artist;
        $artist->name = strtolower($request->name);
        $artist->birthyear = $request->birthyear;
        $artist->country = strtolower($request->country);
        $artist->save();
        return redirect('artists');
    }

    public function delete(Request $request, $id) {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('artists');
    }

    public function update($id) {
        $artist = Artist::find($id);
        return view('artists-update', ['artist' => $artist]);
    }

    public function updateAction(Request $request) {
        $artist = Artist::find($request->id);
        $artist->name = strtolower($request->name);
        $artist->birthyear = $request->birthyear;
        $artist->country = strtolower($request->country);
        $artist->save();
        return redirect('artists');
    }
}
