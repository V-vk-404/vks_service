<div>

    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 col-sm-11 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions">
                                    <i class="fa fa-user-plus"></i>
                                    Update Profile
                                </h4>
                            </div>
                            <br>
                            <div class="card-content px-3">
                                <div class="px-3">
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
                                    <form enctype="multipart/form-data" method="post"
                                        wire:submit.prevent="updateProfile">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputAddress">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required
                                                wire:model="name" value="{{ $adminData->email }}">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    value="{{ $adminData->email }}" wire:model="email" name="email"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender" required
                                                    wire:model="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number" name="phone" required wire:model="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="1234 Main St" name="address" required wire:model="address">
                                        </div>

                                        <div class="form-group">
                                            <label for="newimage" class="col-md-3 label-control">Profile Image :
                                            </label>
                                            <div class="col-md-9">
                                                <input class="form-control-file border-primary" type="file"
                                                    id="newimage" name="newimage" wire:model="newimage">
                                                @if ($newimage)
                                                    <img src="{{ $newimage->temporaryUrl() }}" alt="" width="100"
                                                        height="100"
                                                        class="rounded-circle img-border gradient-summer my-3">
                                                @elseif($image)
                                                    <img src="{{ asset('images/sproviders') }}/{{ $image }}"
                                                        alt="" width="100" height="100"
                                                        class="rounded-circle img-border gradient-summer my-3">
                                                @else
                                                    <img src="{{ asset('images/sproviders/default.png') }}" alt=""
                                                        class="rounded-circle img-border gradient-summer width-100 my-3">
                                                @endif
                                            </div>
                                        </div>



                                        {{-- <div class="form-group ">
                                                <label for="exampleFormControlFile1">Update Photo</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" placeholder="Upload"
                                                wire:model="image"required>
                                              </div> --}}
                                        <div class=" mx-auto">
                                            <center> <button type="submit" class="btn-hover color-hover mx-auto">Submit
                                                </button></center>
                                        </div>
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
