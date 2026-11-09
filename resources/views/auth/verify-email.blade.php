@extends('layouts.guest')

@section('content')
    <div class="login-box" style="width: 450px;">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg text-wrap" style="font-size: 14px; line-height: 1.5;">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </p>

                @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success mb-3 text-center" role="alert" style="font-size: 13px;">
                    A new verification link has been sent to the email address you provided during registration.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="row mt-4">
                    <div class="col-12 mb-3">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-block">Resend Verification Email</button>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 text-secondary" style="text-decoration: underline;">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
