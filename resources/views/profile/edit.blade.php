@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/adminlte/img/user2-160x160.jpg') }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                    <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Joined</b> <a class="float-right">{{ Auth::user()->created_at->format('d M Y') }}</a>
                        </li>
                    </ul>

                    <a href="#settings" data-toggle="tab" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-9">

            @if (session('status') === 'profile-updated')
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                Profile information updated successfully!
                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if (session('status') === 'password-updated')
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                Password updated successfully!
                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Account Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="#security" data-toggle="tab">Change Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="#danger-zone" data-toggle="tab">Delete Account</a></li>
                    </ul>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <div class="tab-content">

                        <!-- Update Profile -->
                        <div class="active tab-pane" id="settings">
                            <form method="post" action="{{ route('profile.update') }}" class="form-horizontal">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" value="{{ old('email', $user->email) }}" required autocomplete="username">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <!-- Change Password -->
                        <div class="tab-pane" id="security">
                            <form method="post" action="{{ route('password.update') }}" class="form-horizontal">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="current_password" class="col-sm-3 col-form-label">Current Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="current_password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" id="current_password" autocomplete="current-password">
                                        @error('current_password', 'updatePassword')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" id="password" autocomplete="new-password">
                                        @error('password', 'updatePassword')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" id="password_confirmation" autocomplete="new-password">
                                        @error('password_confirmation', 'updatePassword')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <!-- Delete Account -->
                        <div class="tab-pane" id="danger-zone">
                            <div class="alert alert-danger">
                                <h5><i class="icon fas fa-ban"></i> Danger Zone!</h5>
                                Once your account is deleted, all of its resources and data will be permanently deleted.
                            </div>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                Delete Account
                            </button>
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title" id="deleteModalLabel">Are you sure you want to delete your account?</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted">Please enter your password to confirm you would like to permanently delete your account.</p>
                        <div class="form-group">
                            <label for="delete_password">Password</label>
                            <input type="password" name="password" class="form-control @error('password', 'userDeletion') is-invalid @enderror" id="delete_password" placeholder="Enter your password" required>
                            @error('password', 'userDeletion')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Confirm Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal -->
@endsection
