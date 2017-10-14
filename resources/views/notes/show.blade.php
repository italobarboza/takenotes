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
    <p>Category: <strong>{{$note->category->name}}</strong></p>
    <pre><code class="{{$note->category->highlight}}">{{$note->note}}</code></pre>
@endsection
