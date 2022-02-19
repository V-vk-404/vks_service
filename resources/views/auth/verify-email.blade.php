{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Please Check your email inbox verification link has been sent to the email address you provided during registration.') }}
        </div>
        {{-- @if (session('status') === 'signin up')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif --}}

{{-- @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
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
        <img class="wave" src="{{ asset('assets\img\loginpage\img\wave_1.png') }}">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">
            <div class="img-lp">
                <img src="{{ asset('assets\img\loginpage\img\ev.svg') }}">
            </div>
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-lp">

                {{-- <x-jet-validation-errors class="mt-1 d-flex justify-content-start" /> --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <img src="{{ asset('assets\img\loginpage\img\avatar-2.svg') }}">
                    <h2 class="title">Welcome</h2>

                    <div class="text-md text-gray-600">
                        <h6 style="color:darkgray; text-align:center;">Thanks for signing up!
                            Please Check your email inbox verification link has been sent to the email address you
                            provided during registration.</h6>
                        @if (session('status') == 'verification-link-sent')
                            <div class="font-medium  text-green-600">
                                <h6 style="color:#1597e5; text-align:center;">A new verification link has been sent to the email address you provided during
                                    registration.</h6>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn-lp">Resend Link</button>
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
