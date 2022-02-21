<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')
    <!-- Navbar (Header) Ends-->
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header py-3 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">Service By Category</h4>
                                        </div>
                                        <div class="">
                                            <a href="{{ url('admin/service-categories') }}"
                                                class="btn-hover color-hover">Back</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content table-responsive">
                                    <div>
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
                                        <table
                                            class="table text-center table-responsive table-striped table-hover shadow">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Category</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($services == null)
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <h3 class="text-danger font-weight-bolder">No Service Found
                                                            </h3>
                                                        </td>
                                                    </tr>
                                                @else
                                                    @foreach ($services as $service)
                                                        <tr>
                                                            <td>

                                                                <span
                                                                    class="badge badge-success mt-3">#SBC0{{ $service->id }}</span>

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
                                                            <td>{{ $service->category->name }}</td>
                                                            <td>{{ $service->created_at }}</td>
                                                            <td>
                                                                <a href="#"><i
                                                                        class="fa fa-pencil-square-o text-info fa-2x   mr-2"></i></a>
                                                                <a type="button" title="Delete" class=""
                                                                    wire:click="deleteConfirm({{ $service->id }})"><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                @endif
                                            </tbody>
                                        </table>

                                        {{ $services->links('pagination.custom') }}



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
