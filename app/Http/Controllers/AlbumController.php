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

    public function add(Request $request) {
        $album = new Album;
        $album->title = strtolower($request->title);
        $album->artist_id = $request->artist;
        $album->release_year = $request->release_year;
        $album->genre = strtolower($request->genre);
        $album->support_id = $request->support;
        $album->save();
        $album->label()->attach($request->label);
        return redirect('/albums');
    }

    public function delete(Request $request, $id) {
        $album = Album::find($id);
        $album->label()->detach();
        $album->delete();
        return redirect('albums');
    }

    public function update($id) {
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
        $album = Album::find($id);
        return view('albums-update', ['album' => $album, 'supports' => $supports, 'labels' => $labels, 'artist' => $artists]);
    }

    public function updateAction(Request $request) {
        $album = Album::find($request->id);
        $album->title = $request->title;
        $album->artist_id = $request->artist;
        $album->release_year = $request->release_year;
        $album->genre = $request->genre;
        $album->support_id = $request->support;
        $album->label()->detach();
        $album->label()->attach($request->label);
        $album->save();
        return redirect('albums');
    }

    public function displayStocks() {
        $supportsAll = Support::all();
        $supports = [];
        foreach ($supportsAll as $value) {
            $supports[$value->id] = $value->name;
        }
        $artistsAll = Artist::all();
        $artists = [];
        foreach ($artistsAll as $value) {
            $artists[$value->id] = $value->name;
        }
        $albums = Album::all();
        return view('stocks', ['albums' => $albums]);
    }

    public function updateActionStocks(Request $request) {
        $album = Album::find($request->id);
        $album->stock = $request->stock;
        $album->price = $request->price;
        $album->save();
        return redirect('stocks');
    }
}
