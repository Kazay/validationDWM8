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
}
