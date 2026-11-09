@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('info') }}
                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="mb-3">
                <a href="{{ route('user.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New User
                </a>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User List</h3>

                    <div class="card-tools">
                        <form action="{{ route('user.index') }}" method="GET">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search name/email..." value="{{ request('search') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Date Joined</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    <div class="user-block" style="display: flex; align-items: center;">
                                        <span class="username" style="margin-left: 0; font-weight: 600;">
                                            {{ $user->name }}
                                        </span>
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">{{ $user->created_at->format('d M Y, H:i') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-sm btn-info" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button
                                        type="button"
                                        class="btn btn-sm btn-danger btn-delete"
                                        data-toggle="modal"
                                        data-target="#deleteModal"
                                        data-action="{{ route('user.destroy', $user) }}"
                                        title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">No user data found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

                <!-- Pagination Footer -->
                @if (isset($users) && method_exists($users, 'links'))
                <div class="card-footer clearfix">
                    <div class="float-right">
                        {{ $users->withQueryString()->links() }}
                    </div>
                </div>
                @endif

            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="form-delete" action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete the user?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Confirm Delete</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@push('scripts')
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const action = button.data('action');

            $(this).find('#form-delete').attr('action', action);
        });
    </script>
@endpush
