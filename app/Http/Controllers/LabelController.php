<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Label;

class LabelController extends Controller
{
    public function display() {
        $labels = Label::all();
        return view('labels', ['labels' => $labels]);
    }

    public function add(Request $request) {
        $label = new Label;
        $label->name = strtolower($request->name);
        $label->save();
        return redirect('labels');
    }

    public function delete(Request $request, $id) {
        $label = Label::find($id);
        $label->delete();
        return redirect('labels');
    }

    public function update($id) {
        $label = Label::find($id);
        return view('labels-update', ['label' => $label]);
    }

    public function updateAction(Request $request) {
        $label = Label::find($request->id);
        $label->name = strtolower($request->name);
        $label->save();
        return redirect('labels');
    }
}
