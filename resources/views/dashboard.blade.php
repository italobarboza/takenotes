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
@if (session()->has('message'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{session()->get('message')}}
</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{session()->get('error')}}
</div>
@endif
<div class="clearfix">
    <h3 class="float-left">Dashboard <small class="text-muted">Your Notes</small></h3>
    <a href="{{ route('notes.new') }}" class="btn btn-outline-primary float-right linkMarginLeft">Create a Note</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>When</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @if (!count($notes))
        <tr>
            <td colspan="4">No registry found</td>
        </tr>
    @else
        @foreach ($notes as $note)
            <tr>
                <td>{{$note->title}}</td>
                <td>{{$note->category->name}}</td>
                <td>{{$note->updated_at->diffForHumans()}}</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-default btn-sm text-primary" href="{{ route('notes.show', $note->id) }}" aria-label="Show">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-default btn-sm text-dark" href="{{ route('notes.edit', $note->id) }}" aria-label="Edit">
                        <i class="far fa-edit"></i>
                    </a>
                    @if (($note->share <> 0) and ($note->url <> ''))
                    <a data-toggle="tooltip" data-placement="top" title="Copy link to clipboard" class="btn btn-default btn-sm text-secondary getLink" data-clipboard-text="{{ route('notes.share', $note->url) }}" href="#" aria-label="Get Link">
                        <i class="fas fa-link"></i>
                    </a>
                    @else
                    <a data-toggle="tooltip" data-placement="top" title="Copy link to clipboard" class="btn btn-default btn-sm text-secondary disabled" aria-label="Get Link">
                        <i class="fas fa-link"></i>
                    </a>
                    @endif
                    <a data-toggle="tooltip" data-placement="top" title="Remove" class="btn btn-default btn-sm text-danger" href="{{ route('notes.delete', $note->id) }}" aria-label="Remove">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection
