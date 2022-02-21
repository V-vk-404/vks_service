<div>
    @include('../layouts/customer/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-11 col-sm-11 mx-auto">
                        <div class="card shadow px-3">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions"><i class="fa fa-user-plus"></i>Update Profile</h4>

                            </div>
                            <hr>
                            <div class="card-content">

                                {{-- @if (Session::has('message'))
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: "{!! Session::get('message') !!}",
                                            text: 'Great Job!',

                                        })
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
                                <form wire:submit.prevent="updateProfile" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputAddress">Name</label>
                                        <input type="text" class="form-control border-primary" id="name" name="name"
                                            required wire:model="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Email</label>
                                        <input type="text" class="form-control border-primary" id="email" name="email"
                                            required wire:model="email">
                                    </div>

                                    <div class="form-group ">
                                        <label class=" label-control" for="phone">Contact Number:
                                        </label>
                                        <input type="text" id="phone" class="form-control border-primary" name="phone"
                                            placeholder="+91-7689XXXXXX" wire:model="phone">
                                    </div>
                                    <div class="form-group">
                                        <label class=" label-control" for="address">Address </label>
                                        <input type="text" id="address" class="form-control border-primary"
                                            name="address" placeholder="Your address" wire:model="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="newimage" class="label-control">Profile Image :
                                        </label>

                                        <input class="form-control-file border-primary" type="file" id="newimage"
                                            name="newimage" wire:model="newimage">
                                        @if ($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" alt="" width="100" height="100"
                                                class="rounded-circle img-border gradient-summer my-3">
                                        @elseif($image)
                                            <img src="{{ asset('images/customer') }}/{{ $image }}" alt=""
                                                width="100" height="100"
                                                class="rounded-circle img-border gradient-summer my-3">
                                        @else
                                            <img src="{{ asset('images/sproviders/default.jpg') }}" alt=""
                                                class="rounded-circle img-border gradient-summer width-100 my-3">
                                        @endif

                                    </div>
                                    <button type="submit" class="btn-hover color-hover mx-auto d-flex">
                                        Update Profile
                                    </button>

                                </form>
                            </div>
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
