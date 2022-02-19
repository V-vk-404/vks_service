<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 ">
                            <div class="card shadow ">
                                <div class="card-header py-3 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All Service Categories</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="{{ route('admin.add_service_categories') }}"
                                                class="btn-hover color-hover mx-3 my-3"> <i
                                                    class="fa fa-plus-circle"></i> Add New</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content table-responsive">
                                    @if (Session::has('message'))
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "{!! Session::get('message') !!}",
                                                text: 'Great Job!',
                                            });
                                        </script>
                                    @endif

                                    <table class="table text-center table-striped table-hover shadow">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Featured</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($scategories as $scategory)
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-3">#SC0{{ $scategory->id }}</span>
                                                    </td>
                                                    <td><img class="rounded-circle img-border"
                                                            src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                                            width="80" height="80" alt=""></td>
                                                    <td>{{ $scategory->name }}</td>
                                                    <td>{{ $scategory->slug }}</td>
                                                    <td>
                                                        @if ($scategory->featured)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.services_by_category', ['category_slug' => $scategory->slug]) }}"
                                                            style="margin-left:15px"><i
                                                                class="fa fa-list-alt text-warning  fa-2x mr-2 text-light"></i></a>

                                                        <a
                                                            href="{{ route('admin.edit_service_categories', ['category_id' => $scategory->id]) }}"><i
                                                                class="fa fa-pencil-square-o text-info fa-2x   mr-2"></i></a>
                                                        <a type="button" title="Delete" class=""
                                                            wire:click="deleteConfirm({{ $scategory->id }})"><i
                                                                class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="Export-btn ml-2">
                                        {{ $scategories->links('pagination.custom') }}
                                        <a href="{{ route('admin.export_service_categories') }}"
                                            class="btn btn-success pull-left ml-2">Export Data <i
                                                class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                                    </div>
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
