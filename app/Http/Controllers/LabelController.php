<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

Use App\Label;

class LabelController extends Controller
{
    public function display() {
        $labels = Label::all();
        return view('labels', ['labels' => $labels]);
    }

    public function add(Request $request) {
        $validatedData = $request->validate([
        'name' => 'required|unique:labels|max:255'
        ]);
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
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('labels')->ignore($request->id),
                'max:255'
            ]
        ]);
        if ($validator->fails()) {
            return redirect('/labels/update/' . $request->id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $label = Label::find($request->id);
        $label->name = strtolower($request->name);
        $label->save();
        return redirect('labels');
    }
}
