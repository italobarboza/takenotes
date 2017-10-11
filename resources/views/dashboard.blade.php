@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/highlight.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notice.css') }}" rel="stylesheet">
@endsection
@section('script')
    <script src="{{ asset('js/copytoclipboard.js') }}"></script>
    <script src="{{ asset('js/jquery.notice.js') }}"></script>
@endsection
@section('content')
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session('status') }}
    </div>
@endif
<div class="clearfix">
    <h3 class="float-left">Dashboard <small class="text-muted">Your Notes</small></h3>
    <a href="{{ route('notes.new') }}" class="btn btn-outline-primary float-right linkMarginLeft">Create a Note</a>
</div>
<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>SQL</td>
            <td>23 days ago</td>
            <td>
                <a href="{{ route('notes.view') }}" class="badge badge-light">View</a>
                <a href="{{ route('notes.edit') }}" class="badge badge-primary">Edit</a>
                <a href="#" data-clipboard-text="{{ config('app.url') }}/note/xGhP1337" class="badge badge-info getLink">Get Link</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
