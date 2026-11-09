@extends('layouts.guest')

@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>

                <form action="{{ route('password.confirm') }}" method="post">
                    @csrf

                    <!-- Password -->
                    <div class="input-group mb-1">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autofocus autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback d-block mb-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
