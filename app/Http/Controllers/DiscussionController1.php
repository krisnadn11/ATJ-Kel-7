<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

class DiscussionController1 extends Controller
{
    public function index()
    {
        $discussions = Discussion::all();
        return view('discussions.index', compact('discussions'));
    }

    public function store(Request $request)
    {
        $discussion = new Discussion;
        $discussion->judul = $request->input('judul');
        $discussion->isi = $request->input('isi');
        $discussion->save();

        return redirect()->route('discussions.index');
    }
}