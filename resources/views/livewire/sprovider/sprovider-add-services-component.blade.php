<div>
    @include('../layouts/sprovider/header')
    <!-- Navbar (Header) Ends-->
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <div class="card shadow">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Add New Service</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('sprovider.all_services') }}"
                                                class="btn-hover color-hover pull-right">Back</a>
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
                                        <form class="form-horizontal" wire:submit.prevent="createService">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light fw-900">Name:
                                                    </label>
                                                    <input id="name" type="text" class="form-control border-primary"
                                                        name="name" wire:model="name" wire:keyup="generateSlug()" />
                                                    @error('name')<p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light fw-900">Slug:
                                                    </label>
                                                    <input id="slug" type="text" class="form-control border-primary"
                                                        name="slug" wire:model="slug" />
                                                    @error('slug')<p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light fw-900">Tagline:
                                                    </label>
                                                    <input id="tagline" type="text" class="form-control border-primary"
                                                        name="tagline" wire:model="tagline" />
                                                    @error('tagline')<p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="service_category_id"
                                                        class=" control-label text-light fw-900">Service
                                                        Category: </label>
                                                    <select name="service_category_id" id="service_category_id"
                                                        class="form-control border-primary"
                                                        wire:model="service_category_id">
                                                        <option value="">Select Service Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('service_category_id')<p class="text-danger">
                                                        {{ $message }}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light fw-900">Price:
                                                    </label>
                                                    <input id="price" type="text" class="form-control border-primary"
                                                        name="price" wire:model="price" />
                                                    @error('price')<p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light fw-900">Discount:
                                                    </label>
                                                    <input id="discount" type="text" class="form-control border-primary"
                                                        name="discount" wire:model="discount" />
                                                    @error('discount')<p class="text-danger">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light fw-900">Discount
                                                        Type:

                                                    </label>
                                                    <select name="discount_type" id="discount_type"
                                                        class="form-control border-primary" wire:model="discount_type">
                                                        <option value="">Select Service Category</option>
                                                        <option value="fixed">Fixed</option>
                                                        <option value="percent">Percent</option>
                                                    </select>
                                                    @error('discount_type')<p class="text-danger">
                                                            {{ $message }}
                                                    </p>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name"
                                                        class=" control-label text-light fw-900">Description: </label>
                                                    <textarea name="description" id="description"
                                                        class="form-control border-primary"
                                                        wire:model="description"></textarea>
                                                    @error('description')<p class="text-danger">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name"
                                                        class=" control-label text-light fw-900">Inclusion: </label>
                                                    <textarea name="inclusion" id="inclusion"
                                                        class="form-control border-primary"
                                                        wire:model="inclusion"></textarea>
                                                    @error('inclusion')<p class="text-danger">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name"
                                                        class=" control-label text-light fw-900">Exclusion: </label>
                                                    <textarea name="exclusion" id="exclusion"
                                                        class="form-control border-primary"
                                                        wire:model="exclusion"></textarea>
                                                    @error('exclusion')<p class="text-danger">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="thumbnail"
                                                        class=" control-label text-light fw-900">Thumbnail:

                                                    </label>
                                                    <input id="thumbnail" type="file"
                                                        class="form-control border-primary" name="thumbnail"
                                                        wire:model="thumbnail" />
                                                    @error('thumbnail')<p class="text-danger">{{ $message }}
                                                        </p>
                                                    @enderror
                                                    @if ($thumbnail)
                                                        <img src="{{ $thumbnail->temporaryUrl() }}" alt=""
                                                            width="60">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="image" class=" control-label text-light fw-900">Image:
                                                    </label>
                                                    <input id="image" type="file" class="form-control border-primary"
                                                        name="image" wire:model="image" />
                                                    @error('image')<p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                    @if ($image)
                                                        <img src="{{ $image->temporaryUrl() }}" alt="" width="60">
                                                    @endif
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-hover color-hover mx-auto d-flex"><i
                                                    class="fa fa-plus-circle ">Add
                                                    Service</i></button>
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
