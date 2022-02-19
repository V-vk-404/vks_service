<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>All Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles" style="padding-bottom:10px;">
                    <h2 class="head-title hh-secondary head-primary" data-aos="zoom-in">Service Categories</h2>
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="services-lines full-services shadow-lg">
                        @foreach ($scategories as $scategory)
                            <li>
                                <div class="item-service-line shadow-lg" data-aos="zoom-in">
                                    <i class="fa"><a
                                            href="{{ route('home.services_by_category', ['category_slug' => $scategory->slug]) }}"><img
                                                class="icon-img" height="80px" width="80px" data-aos=""
                                                src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                                alt="{{ $scategory->name }}"></a></i>
                                    <h5><strong>{{ $scategory->name }}</strong></h5>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
