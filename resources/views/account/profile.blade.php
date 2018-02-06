@extends('layouts.app')
@section('content')
<div class="col-sm-9 mx-auto">
    <div class="card card-login border-dark">
        <div class="card-header">Profile Editor</div>
        <div class="card-body text-dark">
            @if (session()->has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{session()->get('message')}}
            </div>    
            @endif
            <form method="POST" action="{{ route('account.saveprofile') }}">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name" placeholder="Name" value="{{ old('name', $user->name) }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">E-mail Address</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control-plaintext @if ($errors->has('email')) is-invalid @endif" id="email" name="email" placeholder="E-mail Address" value="{{ old('email', $user->email) }}" readonly required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Current Password</label>
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
                    <label for="newPassword" class="col-sm-4 col-form-label">New Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control @if ($errors->has('newPassword')) is-invalid @endif" id="newPassword" name="newPassword" placeholder="New Password">
                        @if ($errors->has('newPassword'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('newPassword') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="newPassword_confirmation" class="col-sm-4 col-form-label">Confirm New Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control @if ($errors->has('newPassword_confirmation')) is-invalid @endif" id="newPassword_confirmation" name="newPassword_confirmation" placeholder="Confirm New Password">
                        @if ($errors->has('newPassword_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('newPassword_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row justify-content-end d-flex align-items-center">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
