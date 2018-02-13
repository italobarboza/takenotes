<?php

namespace App\Http\Controllers\Notes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Note;
use App\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\RedirectResponse;

class NotesController extends Controller
{
    public function __construct() {

    }

    public function show($id) {
        $this->middleware('auth');
        $note = Note::find($id);
        if (($note) && ($note->user_id == Auth::id())) {
            return view('notes.show', compact('note'));
        } else {
            return redirect('dashboard')->with('error', 'You don\'t have permission to access this note');
        }
    }

    public function delete($id) {
        $this->middleware('auth');
        $note = Note::find($id);
        if (($note) && ($note->user_id == Auth::id())) {
            return view('notes.delete', compact('note'));
        } else {
            return redirect('dashboard')->with('error', 'You don\'t have permission to access this note');
        }
    }

    public function destroy($id) {
        $this->middleware('auth');
        $note = Note::find($id);
        if (($note) && ($note->user_id == Auth::id())) {
            $note->delete();
            session()->flash('message', 'Your note has been deleted successfully');
            return redirect('dashboard');
        } else {
            return redirect('dashboard')->with('error', 'You don\'t have permission to access this note');
        }
    }

    public function new() {
        $this->middleware('auth');
        $categories = Category::all();
        return view('notes.new', compact('categories'));
    }

    public function edit($id) {
        $this->middleware('auth');
        $note = Note::find($id);
        if (($note) && ($note->user_id == Auth::id())) {
            $categories = Category::all();
            return view('notes.edit', compact('note', 'categories'));
        } else {
            return redirect('dashboard')->with('error', 'You don\'t have permission to access this note');
        }
    }

    public function save(Request $request, $id = null) {
        $this->middleware('auth');
        if (is_null($id)) {
            $note = new Note;
        } else {
            $note = Note::find($id);
            if ((!$note) || ($note->user_id != Auth::id())) {
                return redirect('dashboard')->with('error', 'You don\'t have permission to access this note');
            }
        }
        $note->title = $request->title;
        $note->category_id = $request->category;
        $note->note = $request->note;
        if ((is_null($request->share)) || (!isset($request->share))) {
            $note->share = 0;
        } else {
            $note->share = 1;
        }
        if (is_null($id)) {
            $note->user_id = Auth::id();
        }
        $note->url = $request->url;

        $messages = [
            'url.required' => 'The Note URL field is required when "Avaliable for others" is enabled',
            'category.min' => 'The :attribute field is required'
        ];
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:notes,title,' . ($id ? $id : 'NULL'). ',id,user_id,' . Auth::id(),
            'category' => 'required|integer|min:1',
            'note' => 'required'
        ], $messages);

        $validator->sometimes('url', 'required|max:60|unique:notes,url,' . ($id ? $id : 'NULL'). ',id', function ($note) {
            return $note->share <> 0;
        });

        $validator->setAttributeNames([
            'title' => 'Title',
            'category' => 'Category',
            'note' => 'Note',
            'share' => 'Share',
            'url' => 'Note URL'
        ]);

        $validator->validate();

        $note->save();

        if (is_null($id)) {
            session()->flash('message', 'Your note has been created successfully');
        } else {
            session()->flash('message', 'Your note has been updated successfully');
        }

        return redirect('dashboard');
    }

    public function share($url = null) {
        if ((!is_null($url)) and (!empty($url))) {
            $note = Note::getSharedNote($url);
            if (($note) && ($note->share <> 0)) {
                return view('notes.share', compact('note'));
            } else {
                abort(404, 'Page not Found');
            }
        } else {
            abort(404, 'Page not Found');
        }
    }
}
