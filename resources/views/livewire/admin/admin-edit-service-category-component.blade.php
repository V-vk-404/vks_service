<div>

    @include('../../layouts/admin/header')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">

                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h4 class="font-weight-bolder text-info">Edit Service Category</h4>
                                        </div>
                                        <div class="marge" style="margin-bottom:15px;">
                                            <a href="{{ route('admin.service_categories') }}"
                                                class="btn-hover color-hover">All Categories</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    @if (Session::has('message'))
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "{!! Session::get('message') !!}",
                                                text: 'Great Job!',
                                            });
                                        </script>
                                    @endif
                                    <div class="px-2">
                                        <form class=" form form-horizontal" wire:submit.prevent="updateServiceCategory">
                                            @csrf
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="col-md-12 ">
                                                        <label for="name" class=" label-control ">Category Name:
                                                        </label>
                                                        <input id="name" type="text" class="form-control border-primary"
                                                            name="name" wire:model="name" wire:keyup="generateSlug()" />
                                                        @error('name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12">
                                                        <label for="name" class="label-control ">Category Slug:
                                                        </label>

                                                        <input id="slug" type="text" class="form-control border-primary"
                                                            name="slug" wire:model="slug" />
                                                        @error('slug')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">


                                                        <label for="image" class=" label-control ">Category Image:
                                                        </label>

                                                        <input id="image" type="file" class=""
                                                            name="newimage" wire:model="newimage" />
                                                        @error('newimage')
                                                            <p class="text-danger">
                                                                {{ $message }}</p>
                                                        @enderror
                                                        @if ($newimage)
                                                            <img src="{{ $newimage->temporaryUrl() }}" alt=""
                                                                width="60">
                                                        @else
                                                            <img src="{{ asset('images/services-categories') }}/{{ $image }}"
                                                                alt="" width="60">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="featured"
                                                            class=" control-label text-light ">Featured:

                                                        </label>
                                                        <select name="featured" id="featured"
                                                            class="form-control border-primary" wire:model="featured">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn-hover color-hover mx-auto d-flex">Update</button>
                                        </form>
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
