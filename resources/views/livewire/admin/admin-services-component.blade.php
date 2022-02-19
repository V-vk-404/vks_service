<div>
    <style>
        .w-5 {
            display: none;
        }

    </style>
    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 ">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h4 class="font-weight-bolder text-info">All Service</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="{{ route('admin.add_service') }}"
                                                class="btn-hover color-hover  mx-3 "><i class="fa fa-plus-circle"></i>
                                                Add New</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content table-responsive">
                                    <div class="">

                                        @if (Session::has('message'))
                                            <script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: "{!! Session::get('message') !!}",
                                                    text: 'Great Job!',
                                                });
                                            </script>
                                        @endif
                                        <table class="table text-center  table-striped table-hover shadow">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Featured</th>
                                                    <th>Category</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $service)
                                                    <tr>
                                                        <td><span
                                                                class=" my-2 badge badge-success ">#SER0{{ $service->id }}</span>
                                                        </td>
                                                        <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                width="80" alt=""></td>
                                                        <td>{{ $service->name }}</td>
                                                        <td>{{ $service->price }}</td>
                                                        <td>
                                                            @if ($service->status)
                                                                Active
                                                            @else
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($service->featured)
                                                                Yes
                                                            @else
                                                                No
                                                            @endif
                                                        </td>
                                                        <td>{{ $service->category->name }}</td>
                                                        <td>{{ $service->created_at }}</td>
                                                        <td>
                                                            <a
                                                                href="{{ route('admin.edit_service', ['service_slug' => $service->slug]) }}"><i
                                                                    class="fa fa-pencil-square-o fa-2x mr-2 text-info"></i></a>
                                                            <a type="button" title="Delete" class=""
                                                                wire:click="deleteConfirm({{ $service->id }})"><i
                                                                    class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="Export-btn ml-2">
                                            {{ $services->links('pagination.custom') }}
                                            <a href="{{ route('admin.export_all_services') }}"
                                                class="btn btn-success pull-left ml-2">Export Data <i
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

</div>
<script>
    window.addEventListener('Swal.fire:confirm', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            showCancelButton: event.detail.showCancelButton,
            confirmButtonColor: event.detail.confirmButtonColor,
            cancelButtonColor: event.detail.cancelButtonColor,

        }).then((result) => {
            if (result.isConfirmed) {

                window.livewire.emit('delete', event.detail.id)
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Your Data is safe ',
                    'error'
                );
            }
        })
    });
</script>
