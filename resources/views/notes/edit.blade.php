@extends('layouts.app')
@section('script')
    <script src="{{ asset('js/newnote.js') }}"></script>
@endsection
@section('content')
<div class="clearfix">
    <h3 class="float-left">Edit Note #{{$note->id}}</h3>
    <a href="{{ route('dashboard') }}" class="small float-right text-muted justify-content-end">Back to Dashboard</a>
</div>
<hr>
<form method="POST" action="{{route('notes.save', $note->id)}}">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title', $note->title) }}">
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label for="category">Category</label>
            <select id="category" name="category" class="form-control">
                <option value="0" selected>Select one option</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" {{ (old('category', $note->category->id) == $category->id ? "selected":"") }}>{{$category->name}}</option>
            @endforeach
            </select>
            @if ($errors->has('category'))
                <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="note">Note</label>
        <textarea class="form-control" id="note" name="note" rows="5">{{ old('note', $note->note) }}</textarea>
        @if ($errors->has('note'))
            <span class="help-block">
                <strong>{{ $errors->first('note') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="share" name="share" value="1" @if (old('share', $note->share)) checked @endif> Avaliable for others
            </label>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">{{ config('app.url') }}/note/</div>
                <input type="text" class="form-control" id="url" name="url" placeholder="Note URL" value="{{ old('url', $note->url) }}">
            </div>
            @if ($errors->has('url'))
                <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Update Note</button>
</form>
@endsection
