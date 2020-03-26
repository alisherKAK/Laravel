<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    function index() {
        return view('music.index', [
            'musics' => Music::all()
        ]);
    }

    function details(Music $music) {
        return view('music.details', [
           'music' => $music
        ]);
    }

    function create() {
        return view('music.form');
    }

    function createPost(Request $request) {
        $request->validate($this->rules());

        $music = new Music($request->except('_token'));
        $music->save();

        return redirect()->route('music.details', $music);
    }

    function update(Music $music) {
        return view('music.form', [
            'music' => $music
        ]);
    }

    function updatePut(Request $request, Music $music) {
        $request->validate($this->rules());

        $data = $request->except(['_token', '_method']);
        $music->update($data);
        $music->save();

        return redirect()->route('music.details', $music);
    }

    function delete(Music $music) {
        $music->delete();
        return redirect()->route('music.index');
    }

    protected function rules() {
        return [
            'name' => 'required',
            'author' => 'required',
            'duration' => 'required',
            'quality' => 'required|int'
        ];
    }
}
