<?php

namespace App\Http\Controllers\Screencast;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

class PlaylistController extends Controller
{
    public function create()
    {
        return view('playlists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Auth::user()->playlist()->create([
            'name' => $request->name,
            'thumbnail' => $request->file('thumbnail')->store('images/playlist'),
            'slug' => Str::slug($request->name . '-' . Str::random(6)),
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return back();
    }

    public function table()
    {
        return view('playlists.table');
    }
}
