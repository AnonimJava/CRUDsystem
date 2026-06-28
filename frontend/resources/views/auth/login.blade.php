@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-5">

        <div class="card shadow">

            <div class="card-header">
                <h3 class="mb-0">
                    Login
                </h3>
            </div>

            <div class="card-body">

                @if(session('status'))

                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>

                @endif

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >

                        @error('email')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            required
                        >

                        @error('password')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>

                    <div class="form-check mb-3">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="remember"
                            id="remember"
                        >

                        <label
                            class="form-check-label"
                            for="remember"
                        >
                            Remember me
                        </label>

                    </div>

                    <div class="d-flex justify-content-between align-items-center">

                        @if (Route::has('password.request'))

                            <a href="{{ route('password.request') }}">
                                Forgot password?
                            </a>

                        @endif

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Login
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
