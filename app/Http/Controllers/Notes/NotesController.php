<?php

namespace App\Http\Controllers\Notes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notes;

class NotesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function view() {
        return view('notes.view');
    }

    public function new() {
        return view('notes.new');
    }

    public function edit() {
        return view('notes.edit');
    }

    public function store(Request $request) {
        // return $request->all();
        // $note = new Note;

        // $note->title = $request->inputTitle;
        // $note->category_id = $request->inputCategory;
        // $note->note = $request->inputNote;
        // $note->share = $request->inputAvaliableForOthers;
        // $note->url = $request->inputNoteURL;

        // $note->save();

        return redirect('dashboard');
    }
}
