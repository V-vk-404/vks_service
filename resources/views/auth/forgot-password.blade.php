{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ========== Background Image ======= -->
        <img class="wave-rp" src="{{ asset('assets\img\loginpage\img\wave_2.png') }}">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">

            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-rp">

                {{-- <x-jet-validation-errors class="mt-1 d-flex justify-content-start" /> --}}
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <img src="{{ asset('assets\img\loginpage\img\avatar-2.svg') }}">
                    <h2 class="title">Welcome</h2>
                    <div class="text-md text-gray-600">
                        <h6 style="color:darkgray; text-align:center;">Forgot your password?
                            No problem. Just let us know your email address and we will email you a password reset link
                            that will allow you to choose a new one.</h6>
                    </div>
                    @if (session('status'))
                        <div class="font-medium text-md text-green-600">
                           <h6 style="color:#1597e5; text-align:center;">{{ session('status') }} </h6>
                        </div>
                    @endif
                    <br>
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email ID</h5>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input">
                        </div>
                    </div>
                    {{-- <input type="button" class="btn-lp" value="Password Reset"> --}}
                    <button type="submit" class="btn-lp">Password Reset</button>
                </form>
            </div>
            <!-- =================================== Login Content  =============================== -->
            <div class="img-rp">
                <img src="{{ asset('assets\img\loginpage\img\fp.svg') }}">
            </div>
        </div>
        <!-- ================================ Login Container ====================================== -->
        <!-- ================== Script of page =========================== -->
        <script type="text/javascript" src="{{ asset('assets\js\login\main.js') }}"></script>
        <!-- ================== Script of page =========================== -->
    </body>

    </html>
</x-guest-layout>
