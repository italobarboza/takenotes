@extends('layouts.app')
@section('content')
<h2>{{ $exception->getMessage() }}</h2>
@endsection