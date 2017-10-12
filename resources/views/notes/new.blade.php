@extends('layouts.app')
@section('script')
    <script src="{{ asset('js/newnote.js') }}"></script>
@endsection
@section('content')
<div class="clearfix">
    <h3 class="float-left">New Note</h3>
    <a href="{{ route('dashboard') }}" class="small float-right text-muted justify-content-end">Back to Dashboard</a>
</div>
<hr>
<form method="POST" action="{{route('notes.store')}}">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="inputTitle">Title</label>
            <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Title" value="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputCategory">Category</label>
            <select id="inputCategory" name="inputCategory" class="form-control">
                <option value="1">PHP</option>
                <option value="2">SQL</option>
                <option value="3">Delphi</option>
                <option value="4">CSS</option>
                <option value="5">JS</option>
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
