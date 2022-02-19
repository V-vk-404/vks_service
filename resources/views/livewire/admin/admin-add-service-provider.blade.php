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
                                    id="from-actions"><i class="ft-user"></i>Add Service Provider Profile</h4>
                            </div>
                            <br>
                            <div class="card-content px-4">
                                @if (Session::has('message'))
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: "{!! Session::get('message') !!}",
                                            text: 'Great Job!',
                                        });
                                    </script>
                                @endif
                                <form enctype="multipart/form-data" method="post"
                                    wire:submit.prevent="addServiceProvider">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputAddress">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name"
                                            name="name" required wire:model="name">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                placeholder="Email" wire:model="email" name="email" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4"
                                                placeholder="Password" name="password" required wire:model="password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number" name="phone" required wire:model="phone">
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
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="1234 Main St" name="address" required wire:model="address">
                                    </div>
                                    {{-- <div class="form-group">

                                              <input type="hidden" class="form-control" id="inputAddress" placeholder="1234 Main St" name="u_type" required wire:model="u_type" value="SPV">
                                            </div> --}}
                                    <div class="form-group">
                                        <label for="inputAddress">Profession</label>
                                        <select id="service_category_id" name="service_category_id"
                                            class="form-control " wire:model="service_category_id">
                                            @foreach ($scategories as $scategory)
                                                <option value="{{ $scategory->id }}">{{ $scategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="newimage" class="col-md-3 label-control">Profile Image :
                                        </label>
                                        <div class="col-md-9">
                                            <input class="form-control-file border-primary" type="file" id="newimage"
                                                name="newimage" wire:model="newimage">
                                            @if ($newimage)
                                                <img src="{{ $newimage->temporaryUrl() }}" alt="" width="100"
                                                    height="100" class="rounded-circle img-border gradient-summer my-3">
                                            @elseif($image)
                                                <img src="{{ asset('images/sproviders') }}/{{ $image }}" alt=""
                                                    width="100" height="100"
                                                    class="rounded-circle img-border gradient-summer my-3">
                                            @else
                                                <img src="{{ asset('images/sproviders/default.jpg') }}" alt=""
                                                    class="rounded-circle img-border gradient-summer width-100 my-3">
                                            @endif
                                        </div>
                                    </div>




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


</div>
</div>

</div>
