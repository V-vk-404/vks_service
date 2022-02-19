<div>
    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <h4 class="text-info font-weight-bold ">All User List</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-content table-responsive">
                                    <div class="">

                                        @if (Session::has('message'))
                                            <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ Session::get('message') }}</strong>
                                            </div>

                                    </div>
                                    @endif
                                    <table class="table text-center  table-striped table-hover shadow ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-3">#U0{{ $user->id }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($user->image)
                                                            <img src="{{ asset('images/customer') }}/{{ $user->image }}"
                                                                alt="" width="80" height="80"
                                                                class="rounded-circle img-border gradient-summer">
                                                        @else
                                                            <img src="{{ asset('images/sproviders/default.jpg') }}"
                                                                alt=""
                                                                class="rounded-circle img-border gradient-summer "
                                                                width="80" height="80" />
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>

                                                    <td>{{ $user->address }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="Export-btn ml-2">
                                        {{ $users->links('pagination.custom') }}
                                        <a href="{{ route('admin.export_customer') }}"
                                            class="btn btn-success pull-left ml-1 ">Export Data <i
                                                class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
    </div>
    <!-- END : End Main Content-->
</div>
</div>
<style>
    .w-5 {
        display: none;
    }

</style>
</div>
