<div>
    @include('../layouts/customer/header')
    <style>
        th {
            vertical-align: top;
        }

        .dynamic-cards {
            transition: all 0.3s ease-in-out;
        }

        .dynamic-cards:hover {
            transform: translate3d(0, -10px, 0);
        }

    </style>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row">

                    @if (Session::has('message'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: "{!! Session::get('message') !!}",
                                text: 'Great Job!',
                            });
                        </script>
                    @endif
                    <div class=" col-lg-6 col-md-6 col-12">
                        <div class="card gradient-blackberry dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-4 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalServices }}</h3>
                                            <span class="font-medium-4"><b>Total Booked Services</b></span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa ft-briefcase  fa-4x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-6 col-12">
                        <div class="card  gradient-ibiza-sunset  shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-4 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">₹{{ $totalCost }}</h3>
                                            <span class="font-medium-4"><b>Total Booked Services</b></span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet fa-4x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row match-height justify-content-md-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card shadow " style="overflow-x: auto">
                            <div class="card-header pb-2">
                                <h4 class="card-title text-info"
                                    style="text-align:center;font-weight:500; font-size:1.7rem;">
                                    <i class="ft-shopping-cart fa-1x"> </i> Booking History
                                </h4>
                            </div>
                            <div class="card-content">
                                <table class="table table-responsive-sm text-center table-striped table-hover shadow ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Name</th>
                                            <th>Order Id</th>
                                            <th>Service Provider</th>
                                            <th>Amount</th>
                                            <th>Booking Data</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($paytms as $paytm)
                                            @if ($paytm->user_id === Auth::user()->id)
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-2 ">#BH0{{ $paytm->id }}</span>
                                                    </td>

                                                    <td>{{ $paytm->slug_name }}</td>
                                                    <td>{{ $paytm->order_id }}</td>
                                                    <td>{{ $paytm->sprovider_name }}</td>
                                                    <td>{{ $paytm->price }}</td>
                                                    <td>{{ $paytm->created_at }}</td>
                                                    <td>
                                                        <a type="button" title="Delete"
                                                            wire:click="deleteConfirm({{ $paytm->id }})"><i
                                                                class="ft-x fa-2x mr-2  text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $paytms->links('pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>

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
