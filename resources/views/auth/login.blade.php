@extends('layouts.auth.app', ['title' => 'Login'])

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            {{-- <h4>Login</h4> --}}

            <div class="card-body">
                <div class="text-dark d-flex justify-content-center">
                    <span class="">SIGN <span class="text-primary">IN</span></span>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 text-muted text-center">
            <a href="{{ route('register') }}">Create now</a>
        </div>
    @endsection
