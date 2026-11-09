@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- About Card -->
                    <div class="card card-primary card-outline shadow-sm mb-4">

                        <div class="card-body box-profile text-center">
                            <!-- Logo / Icon Profil -->
                            <div class="text-center mb-3 mt-2">
                                <img src="{{ asset('assets/adminlte/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            </div>

                            <h3 class="profile-username text-dark font-weight-bold">Laravel AdminLTE 3</h3>
                            <p class="text-muted">AdminLTE 3 for Laravel.</p>

                            <p class="text-muted px-4">
                                A Laravel starter application integrated with AdminLTE 3. It includes authentication, a dashboard, profile pages, and user management, with FrankenPHP support for local development and Docker or Podman containers.
                            </p>

                            <div class="text-center">
                                <a href="https://github.com/colorlibhq/AdminLTE" target="_blank" class="btn btn-primary btn-sm px-4">
                                    <i class="fab fa-github fa-fw"></i> AdminLTE Repository
                                </a>
                                <a href="https://github.com/pangeran-droid/laravel-admin-lte-3" target="_blank" class="btn btn-success btn-sm px-4">
                                    <i class="fab fa-github fa-fw"></i> Go to repository
                                </a>
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <div class="row text-center">
                                <div class="col-4 border-right">
                                    <description class="text-muted d-block small">Total Users</description>
                                    <h5 class="font-weight-bold text-dark mb-0">{{ $totalUsers }}</h5>
                                </div>
                                <div class="col-4 border-right">
                                    <description class="text-muted d-block small">Project Version</description>
                                    <h5 class="font-weight-bold text-dark mb-0">1.0.0-beta</h5>
                                </div>
                                <div class="col-4">
                                    <description class="text-muted d-block small">License</description>
                                    <h5 class="font-weight-bold text-dark mb-0">MIT</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <!-- Credits & Tech Stack Card -->
                    <div class="card card-outline card-info shadow-sm mb-4">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-info-circle mr-1"></i> Credits & Technology</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">
                                The Laravel AdminLTE 3 project was built using several libraries and open-source packages (open-source) third parties. A lot of thanks to the web community:
                            </p>
                            <ul class="text-muted mb-0">
                                <li class="mb-2"><a href="https://laravel.com" target="_blank">Laravel</a> - PHP application framework.</li>
                                <li class="mb-2"><a href="https://adminlte.io" target="_blank">AdminLTE v3</a> - Bootstrap-based admin dashboard template.</li>
                                <li class="mb-2"><a href="https://getbootstrap.com" target="_blank">Bootstrap 4</a> - Responsive CSS framework.</li>
                                <li class="mb-2"><a href="https://fontawesome.com" target="_blank">Font Awesome</a> - Icon toolkit.</li>
                                <li class="mb-2"><a href="https://frankenphp.dev" target="_blank">FrankenPHP</a> - PHP application server.</li>
                                <li class="mb-2"><a href="https://www.docker.com" target="_blank">Docker</a> - Container engines.</li>
                                <li class="mb-2"><a href="https://podman.io" target="_blank">Podman</a> - Container engines.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
@endsection
