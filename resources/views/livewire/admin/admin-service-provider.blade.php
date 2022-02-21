<div>
    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All Service Providers</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="{{ route('admin.add_service_provider') }}"
                                                class="btn-hover color-hover mx-3 my-3"><i
                                                    class="fa fa-plus-circle"></i>Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-content table-responsive">
                                    <div class="card-body">
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
                                        <table class="table text-center  table-striped table-hover shadow ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Profession</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sproviders as $sprovider)
                                                    <tr>
                                                        <td><span
                                                                class="badge badge-success mt-3">#SP0{{ $sprovider->id }}</span>
                                                        </td>
                                                        <td>
                                                            @if ($sprovider->image)
                                                                <img src="{{ asset('images/sproviders') }}/{{ $sprovider->image }}"
                                                                    width="80" height="80" alt=""
                                                                    class="rounded-circle img-border gradient-summer">

                                                            @else
                                                                <img src="{{ asset('images/sproviders/default.jpg') }}"
                                                                    alt=""
                                                                    class="rounded-circle img-border gradient-summer "
                                                                    width="80" height="80" />
                                                            @endif
                                                        </td>
                                                        <td>{{ $sprovider->name }}</td>
                                                        <td>
                                                            @if ($sprovider->service_category_id)
                                                                {{ $sprovider->category->name }}
                                                            @endif

                                                        </td>
                                                        <td>{{ $sprovider->phone }}</td>
                                                        <td>{{ $sprovider->address }}</td>
                                                        <td>
                                                            {{-- <a type="button" title="Delete" class=""
                                                                wire:click="deleteConfirm({{ $sprovider->id }})"><i
                                                                    class="ft-trash-2 fa-2x mr-2  text-danger"></i></a> --}}
                                                            <a href="#"
                                                                onclick="confirm('Are you sure, you want to delete this service Provider!')||event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteServiceProvider({{ $sprovider->id }})"
                                                                style="margin-left:10px"><i
                                                                    class="fa fa-trash fa fa-trash  text-danger  fa-2x   mr-4"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                        {{ $sproviders->links('pagination.custom') }}
                                        <div class="Export-btn">
                                            <a href="{{ route('admin.export_service_provider') }}"
                                                class="btn-success btn pull-left ml-2">Export Data <i
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
