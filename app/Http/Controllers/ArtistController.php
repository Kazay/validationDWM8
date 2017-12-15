<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Artist;

class ArtistController extends Controller
{
    public function display() {
        $artists = Artist::all();
        return view('artists', ['artists' => $artists]);
    }

    public function add(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|unique:artists|max:255',
            'birthyear' => 'required|integer',
            'country' => 'required|max:255'
            ]);
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
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('artists')->ignore($request->id),
                'max:255'
            ],
            'birthyear' => 'required|integer',
            'country' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return redirect('/artists/update/' . $request->id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $artist = Artist::find($request->id);
        $artist->name = strtolower($request->name);
        $artist->birthyear = $request->birthyear;
        $artist->country = strtolower($request->country);
        $artist->save();
        return redirect('artists');
    }
}
