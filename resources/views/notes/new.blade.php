@extends('layouts.app')
@section('content')
<div class="clearfix">
    <h3 class="float-left">New Note</h3>
    <a href="{{ route('dashboard') }}" class="small float-right text-muted justify-content-end">Back to Dashboard</a>
</div>
<hr>
<form method="GET" action="{{route('notes.new')}}">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="inputTitle">Title</label>
            <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Title" value="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputCategory">Category</label>
            <select id="inputCategory" name="inputCategory" class="form-control">
                <option>PHP</option>
                <option>SQL</option>
                <option>Delphi</option>
                <option>CSS</option>
                <option>JS</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputNote">Note</label>
        <textarea class="form-control" id="inputNote" name="inputNote" rows="5"></textarea>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="inputAvaliableForOthers" name="inputAvaliableForOthers" value="1" checked> Avaliable for others
            </label>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">{{ config('app.url') }}/note/</div>
                <input type="text" class="form-control" id="inputNoteURL" name="inputNoteURL" placeholder="Note URL">
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Save Note</button>
</form>
@endsection
