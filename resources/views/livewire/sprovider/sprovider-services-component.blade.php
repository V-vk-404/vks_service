<div>
    @include('../layouts/sprovider/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-sm-11 mx-auto ">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All Service</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="{{ route('sprovider.add_service') }}"
                                                class="btn-hover color-hover">
                                                <i class="fa fa-plus-circle "></i>Add New</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class=" table-responsive">

                                        {{-- @if (Session::has('message'))
                                            <script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: "{!! Session::get('message') !!}",
                                                    text: 'Great Job!',
                                                });
                                            </script>
                                        @endif --}}

                                        @if (Session::has('message'))
                                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ Session::get('message') }}</strong>
                                            </div>
                                        @endif
                                        <table class="table text-center table-striped table-hover shadow ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Featured</th>
                                                    <th>Category</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!$services == null)
                                                    @foreach ($services as $service)
                                                        <tr>
                                                            <td><span
                                                                    class="badge badge-info mt-2">#SER0{{ $service->id }}</span>
                                                            </td>
                                                            <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                    width="80" alt=""></td>
                                                            <td>{{ $service->name }}</td>
                                                            <td>{{ $service->price }}</td>
                                                            <td>
                                                                @if ($service->status)
                                                                    <span class="badge badge-success">Active</span>
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
                                                                <a title="Edit"
                                                                    href="{{ route('sprovider.edit_service', ['service_slug' => $service->slug]) }}"><i
                                                                        class="ft-edit fa-2x mr-2   text-info"></i></a>

                                                                {{-- <a type="button" title="Delete" class="tooltip-hover"
                                                                    wire:click="deleteConfirm({{ $service->id }})"><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a> --}}
                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this booking histroy!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteService({{ $service->id }})">
                                                                    <i class="ft-x text-danger fa-2x mr-2"></i>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <h4 class="text-danger font-weight-bolder">No Booking
                                                                History Found</h4>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>

                                        </tbody>
                                        </table>

                                        <div class="Export-btn ml-2">
                                            {{ $services->links('pagination.custom') }}
                                            <a href="{{ route('sprovicer.export_all_services') }}"
                                                class="btn btn-success pull-left ml-2">Export Data
                                                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                            </a>
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
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
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
