@extends('layouts.app')
@section('content')
<div class="col-sm-9 mx-auto">
    <div class="card card-login border-dark">
        <div class="card-header">Reset Password</div>
        <div class="card-body text-dark">
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">E-mail Address</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" value="{{ old('email') }}" autofocus required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row justify-content-end d-flex align-items-center">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                    </div>
                </div>
            </form>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
