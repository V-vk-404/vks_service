{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ========== Background Image ======= -->
        <img class="wave" src="{{ asset('assets\img\loginpage\img\wave_1.png') }}">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">
            <div class="img-lp">
                <img src="{{ asset('assets\img\loginpage\img\rt_3.png') }}">
            </div>
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-lp">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
        
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <img src="{{ asset('assets\img\loginpage\img\avatar-2.svg') }}">
                    <h2 class="title">Welcome</h2>
                    <x-jet-validation-errors/>
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email ID</h5>
                            <input id="email" type="email" name="email" :value="old('email', $request->email)" required=""
                                class="input">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" name="password" required="" autocomplete="new-password"
                            class="input">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Confirm-Password</h5>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                            autocomplete="new-password" class="input">
                        </div>
                    </div>
                    <button type="submit" class="btn-lp">Change Password</button>
                </form>
            </div>
            <!-- =================================== Login Content  =============================== -->
            
        </div>
        <!-- ================================ Login Container ====================================== -->
        <!-- ================== Script of page =========================== -->
        <script type="text/javascript" src="{{ asset('assets\js\login\main.js') }}"></script>
        <!-- ================== Script of page =========================== -->
    </body>

    </html>
</x-guest-layout>
