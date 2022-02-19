<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $scategory->name }} Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>{{ $scategory->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles" style=" padding-bottom:10px;">
                    <h2 class="head-title hh-secondary head-primary">{{ $scategory->name }} Services</h2>
                </div>
            </div>
        </div>
        <div class="content_info "
            style="margin-top: -70px; background:white !important; padding-bottom:0px !important;">
            <div class="section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="padding-bottom:70px !important;">
                            <div class="row">
                                <div class="products-tabs">
                                    <div id="tab1" class="tab-pane active">
                                        <div class="products-slick" data-nav="#slick-nav-3">
                                            @if ($scategory->services->count() > 0)
                                                @foreach ($scategory->services as $service)
                                                    <div class="product" data-aos="zoom-in">
                                                        <a
                                                            href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}">
                                                            <div class="product-img tb">
                                                                <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                    alt="{{ $service->name }}">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">
                                                                    {{ $service->category->name }}</p>
                                                                <h3 class="product-name"><a
                                                                        href="#">{{ $service->name }}</a>
                                                                </h3>
                                                                <h4 class="product-price">₹{{ $service->price }}
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <button class="add-to-cart-btn btn-hover color-hover" style="margin-top: -0.2px">
                                                                    <a
                                                                        href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}"><i
                                                                            class="fa fa-shopping-cart"></i> Book
                                                                        Now</a></button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                @endforeach
                                            @else
                                                <h2>Services will be available soon.</h2>
                                            @endif
                                        </div>
                                        <div id="slick-nav-3" class="products-slick-nav-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
