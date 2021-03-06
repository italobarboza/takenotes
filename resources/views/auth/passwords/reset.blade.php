@extends('layouts.app')
@section('content')
<div class="col-sm-9 mx-auto">
    <div class="card card-login border-dark">
        <div class="card-header">Reset Password</div>
        <div class="card-body text-dark">
            <form method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">E-mail Address</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email" placeholder="E-mail Address" value="{{ $email or old('email') }}" autofocus required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control @if ($errors->has('password')) is-invalid @endif" id="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control @if ($errors->has('password_confirmation')) is-invalid @endif" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row justify-content-end d-flex align-items-center">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
