<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Contact Us</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="{{ asset('img/img-theme/shp.png') }}" class="img-responsive" alt="">
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.93376178807!2d80.80242487947933!3d26.848929331108234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1642080693874!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <aside>

                                <address>
                                    <strong>VS Home Services.</strong><br>
                                    <i class="fa fa-map-marker"></i><strong>Address: </strong>Uttar Pradesh, Lucknow,
                                    India<br>
                                    <i class="fa fa-phone"></i><strong>Phone: </strong> +91-1234567890
                                </address>
                                <address>
                                    <strong>VS Home Services Emails</strong><br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                        href="mailto:contact@totalservices.in"> vshomeservices22@gmail.com</a><br>

                                </address>
                            </aside>
                            <hr class="tall">
                        </div>
                        <div class="col-md-8 contact">
                            <h3>Get in Touch</h3>
                            <p class="lead">
                            </p>
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
                            <form id="contactform" class="form-theme " method="post"
                                wire:submit.prevent="sendMessage">
                                @csrf
                                <input type="text" placeholder="Name" name="name" id="name" wire:model="name"
                                    required="">
                                @error('name')
                                    <p class="text-danger">{{ 'message' }}</p>
                                @enderror
                                <input type="email" placeholder="Email" name="email" id="email" wire:model="email"
                                    required="">
                                @error('email')
                                    <p class="text-danger">{{ 'message' }}</p>
                                @enderror
                                <input type="text" placeholder="Phone" name="phone" id="phone" wire:model="phone"
                                    required="">
                                @error('phone')
                                    <p class="text-danger">{{ 'message' }}</p>
                                @enderror
                                <textarea placeholder="Your Message" name="message" id="message" wire:model="message"
                                    required=""></textarea>
                                @error('message')
                                    <p class="text-danger">{{ 'message' }}</p>
                                @enderror
                                <input type="submit" name="Submit" value="Send Message" class="btn-hover color-hover "
                                    style="width: 200px; margin-top:20px;">
                            </form>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
