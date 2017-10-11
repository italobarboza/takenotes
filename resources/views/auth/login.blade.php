@extends('layouts.app')
@section('content')
<div class="col-sm-9 mx-auto">
    <div class="card card-login border-dark">
        <div class="card-header">Login</div>
        <div class="card-body text-dark">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Login</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Login" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-8">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <div class="form-group row justify-content-end d-flex align-items-center">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Sign in</button> <a href="{{ route('password.request') }}" class="linkMarginLeft">Forgot Your Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
