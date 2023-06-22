<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function index()
    {
        $isChecked = false;
        return view('button.index', compact('isChecked'));
    }

    public function toggle(Request $request)
    {
        $isChecked = $request->input('isChecked');
        return view('button.index', compact('isChecked'));
    }
}
