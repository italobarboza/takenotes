<?php

namespace App\Http\Controllers\Notes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
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
