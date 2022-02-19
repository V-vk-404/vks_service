<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->

    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center ">
                        <div class="col-md-12  ">
                            <div class="card shadow-lg">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All User Queries</h4>
                                        </div>
                                        <div class="">

                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table text-center  table-striped table-hover shadow">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Message</th>
                                                    <th>Received</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($contacts != null)
                                                    @foreach ($contacts as $contact)
                                                        <tr>
                                                            <td><span
                                                                    class="badge badge-success ">#QU0{{ $contact->id }}</span>
                                                            </td>
                                                            <td>{{ $contact->name }}</td>
                                                            <td>{{ $contact->email }}</td>
                                                            <td>{{ $contact->phone }}</td>
                                                            <td>{{ $contact->message }}</td>
                                                            <td>{{ $contact->created_at }}</td>
                                                            <td> <a type="button" title="Delete" class=""
                                                                    wire:click="deleteConfirm({{ $contact->id }})"><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <td colspan="6" class="text-center">
                                                        <h4 class="text-danger font-weight-bolder">No Query Found</h4>
                                                    </td>
                                                @endif
                                            </tbody>
                                        </table>
                                        {{ $contacts->links('pagination.custom') }}
                                        <div class="Export-btn">
                                            <a href="{{ route('admin.export_contacts') }}"
                                                class="btn btn-success pull-left ml-3">Export Data <i
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
