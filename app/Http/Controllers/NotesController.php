<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        return view('notes.view');
    }

    public function new()
    {
        return view('notes.new');
    }

    public function edit()
    {
        return view('notes.edit');
    }

}
