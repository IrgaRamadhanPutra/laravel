@extends('layouts.auth.app', ['title' => 'Login'])

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            {{-- <h4>Register</h4> --}}
            {{-- </div> --}}

            <div class="card-body">
                <div class="text-dark d-flex justify-content-center">
                    <span class="">Regis<span class="text-primary">ter</span></span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                            name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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
                        <label for="password" class="control-label">Password Confirmation</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password_confirmation">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                        </button>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Already have a account? <a href="{{ route('login') }}">Sign In Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
