@include('frontend.layouts.header')

<div class="section-title-02-2 honmob">
    <div class="bg_parallax image_02_parallax"></div>
    <div class="opacy_bg_02">
        <div class="container">
            <h1>Payment Details</h1>
            <div class="crumbs">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="content-central">
    <div class="semiboxshadow text-center">
        <img src="{{ asset('img/img-theme/shp.png') }}" class="img-responsive" alt="">
    </div>
    {{-- {{route('payment-store')}} --}}
    <div class="content_info">
        <div class="paddings-mini">
            <div class="container">
                <div class="row">
                    {{-- <h2 style="text-align:center; color:#1597e5; font-weight:700;">Payment Details</h2>
                    <hr> --}}
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" text-align:center; color: #1597e5; font-weight:700; font-size:20px;">Basic Details</div>
                            <div class="panel-body">
                                <form id="" action="{{ route('paytm-store') }}" class="form-theme" method="post">
                                    @csrf
                                    <div class="col-md-6">
                                        <input type="text"  placeholder="User Name"
                                            name="user_name" value="{{ Auth::user()->name }}" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"  placeholder="User Phone No."
                                            name="user_phone" value="{{ Auth::user()->phone }}" id="phone"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="User Email"
                                            name="user_email" value="{{ Auth::user()->email }}" id="email"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Address" value="{{ Auth::user()->address }}"
                                            name="user_address" id="user_address" required="">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        @if (Session::has('service_category'))
                                            <input type="text" placeholder="Service Category"
                                                value="{{ Session::get('service_category') }}"
                                                name="service_category" id="service_category" required=""
                                                readonly>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('price'))
                                            <input type="text" placeholder="Price" name="price"
                                                value="{{ Session::get('price')}}" id="price" required="" readonly>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('slug_id'))
                                            <input type="hidden" placeholder="Service"
                                                value="{{ Session::get('slug_id') }}" name="slug_id" id="slug_id"
                                                required="" readonly>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('slug_image'))
                                            <input type="hidden" placeholder="Service"
                                                value="{{ Session::get('slug_image') }}" name="slug_image" id="slug_image"
                                                required="" readonly>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('service_category_id'))
                                            <input type="hidden" placeholder="Service Category_id"
                                                value="{{ Session::get('service_category_id') }}"
                                                name="service_category_id" id="service_category_id" required=""
                                                readonly>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        @if (Session::has('slug_name'))
                                            <input type="text" placeholder="Service"
                                                value="{{ Session::get('slug_name') }}" name="slug_name" id="slug_id"
                                                required="" readonly>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" placeholder="User Id" name="user_id"
                                                value="{{ Auth::user()->id }}" required="">
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('sprovider_id'))
                                            <input type="hidden" placeholder="Provider Name" name="sprovider_id"
                                                value="{{ Session::get('sprovider_id') }}" required="">
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('sprovider_name'))
                                            <input type="hidden" placeholder="Provider Name" name="sprovider_name"
                                                value="{{ Session::get('sprovider_name') }}" required="">
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('sprovider_phone'))
                                            <input type="hidden" placeholder="Provider Phone No."
                                                name="sprovider_phone" value="{{ Session::get('sprovider_phone') }}"
                                                id="phone" required="">

                                        @endif

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="Submit" value="Payment"
                                            class="btn btn-info" style="margin-bottom:10px; font-weight:700; width:300px; font-size:16px;">Proceed To Pay</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <aside class="widget">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="text-align:center; color: #1597e5; font-weight:700; font-size:20px;">Payment Recap</div>
                                <div class="panel-body"> 
                                    <table class="table">
                                        <tr>
                                            <td>Serviec Provider Name</td>
                                            <td>{{ Session::get('sprovider_name') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provider Number</td>
                                            <td>{{ Session::get('sprovider_phone') }}</td>
                                        </tr>
                                        <tr>
                                            <td>User Name</td>
                                            <td>{{Auth::user()->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>User Number</td>
                                            <td>{{Auth::user()->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Service Category</td>
                                            <td>{{ Session::get('service_category') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Service Name</td>
                                            <td>{{ Session::get('slug_name') }}</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="panel-footer">
                                    <h4 style="font-weight: 600; color:#1597e5;">Total Price - ₹ {{ Session::get('price') }}</h4>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
