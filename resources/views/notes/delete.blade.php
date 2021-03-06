@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/highlight.default.css') }}" rel="stylesheet">
@endsection
@section('script')
    <script src="{{ asset('js/highlight.pack.js') }}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection
@section('content')
    <div class="clearfix">
        <h3 class="float-left">{{$note->title}}</h3>
        <a href="{{ route('dashboard') }}" class="small float-right text-muted justify-content-end">Back to Dashboard</a>
    </div>
    <hr>
    <p>
        <form method="POST" action="{{route('notes.destroy', $note->id)}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            Category: <strong>{{$note->category->name}}</strong>
            <button type="submit" class="btn btn-danger float-right">Permanently Delete</button>
        </form>
    </p>
    <pre><code class="{{$note->category->highlight}}">{{$note->note}}</code></pre>
@endsection
