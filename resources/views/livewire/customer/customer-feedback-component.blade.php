<div>

    @include('../../layouts/customer/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-11 col-sm-11 mx-auto">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions"><i class="ft-user"></i>Add Feedback</h4>
                            </div>
                            <br>
                            <div class="card-content px-4">
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
                                <form enctype="multipart/form-data" method="post" wire:submit.prevent="addFeedback">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputAddress">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name"
                                            name="name" value="{{ Auth::user()->name }}" readonly
                                            title="Your can't change your name here">
                                    </div>

                                    <div class="form-group ">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                            value="{{ Auth::user()->email }} " name="email" readonly
                                            title="Your can't change your name here">
                                    </div>
                                    <div class="form-group ">
                                        <label for="feedback_title">Feedback Title</label>
                                        <input type="text" class="form-control" id="feedback_title"
                                            placeholder="Feedback title" name="Feedback title" required
                                            wire:model="feedback_title">
                                    </div>
                                    <div class="form-group ">
                                        <label for="feedback_desc">Feedback Description</label>
                                        <textarea class="form-control" id="feedback_desc" placeholder="Your Valuable "
                                            name="feedback_desc" required wire:model="feedback_description" id=""
                                            cols="10" rows="5"></textarea>

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
    <!-- END : End Main Content-->



</div>
</div>

</div>
