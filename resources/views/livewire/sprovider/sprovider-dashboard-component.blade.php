<style>
    .dynamic-cards {
        transition: all 0.6s ease;

    }

    .dynamic-cards:hover {
        transform: scale(1.1);

    }

</style>
<div>
    @include('../layouts/sprovider/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">

                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-blackberry   dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalUser }}</h3>
                                            <span>Total Users</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-ibiza-sunset dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalService }}</h3>
                                            <span>Total Services</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="ft-grid font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-green-tea dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalServe }}</h3>
                                            <span>Total Services Done</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa ft-briefcase  fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-pomegranate dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">₹{{ $totalEarning }}</h3>
                                            <span>Total Earning</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart3"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="extended">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title py-2 text-info"
                                        style="text-align: center; font-weight:500; font-size:1.6rem;"><i
                                            class="fa ft-briefcase  fa-1x"></i> Work History</h4>
                                </div>
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
                                <div class="card-content">

                                    <div class=" table-responsive">
                                        <table class="table text-center table-striped table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User Name</th>
                                                    <th>Service Name</th>
                                                    <th>Order ID</th>
                                                    <th>Amount</th>
                                                    <th>Serve Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($paytms) > 0)
                                                    @foreach ($paytms as $paytm)
                                                        @if ($paytm->sprovider_id === Auth::user()->id)
                                                            <tr>
                                                                <td><span
                                                                        class="badge badge-success ">#WH0{{ $paytm->id }}</span>
                                                                </td>
                                                                <td>{{ $paytm->user_name }}</td>
                                                                <td>{{ $paytm->slug_name }}</td>
                                                                <td>{{ $paytm->order_id }}</td>
                                                                <td>₹{{ $paytm->price }}</td>
                                                                <td>{{ $paytm->created_at }}</td>
                                                                <td>
                                                                    <a href="#"
                                                                        onclick="confirm('Are you sure, you want to delete this booking histroy!')||event.stopImmediatePropagation()"
                                                                        wire:click.prevent="deleteService({{ $paytm->id }})">
                                                                        <i
                                                                            class="ft-x text-danger fa-2x mr-2"></i>
                                                                    </a>
                                                                    {{-- <a type="button" title="Cancel"
                                                                        wire:click="deleteConfirm({{ $paytm->id }})"><i
                                                                            class="ft-x  fa-2x mr-2 text-danger"></i></a> --}}
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <h4 class="text-danger font-weight-bolder">No Booking
                                                                History Found</h4>
                                                        </td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>

                                        <div class="Export-btn ml-2">
                                            {{ $paytms->links('pagination.custom') }}
                                            <a href="{{ route('sprovicer.export_work_history') }}"
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
                    'Your service is safe ',
                    'error'
                );
            }
        })
    });
</script>
