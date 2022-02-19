
<x-guest-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
                {{-- <x-jet-validation-errors class="mb-4" /> --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <img src="{{ asset('assets\img\loginpage\img\avatar-2.svg') }}">
                    <h2 class="title">Welcome</h2>
                    <x-jet-validation-errors />
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input id="name" type="text" name="name" :value="old('name')" required=""
                                autocomplete="name" class="input">
                        </div>
                    </div>

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
                    <div class="input-div">
                        <div class="i-lp">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="select">
                            <select name="registeras" id="registeras">
                                <option value=" " selected disabled>Register As</option>
                                <option value="CST">Customer</option>
                                <option value="SPV">Service Provider</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn-lp">Register</button>
                    </div>
                    <div class="">
                        <!-- ================== Redirect on Login page =========================  -->
                        <div class="span-r">
                            <a class="" href="{{ route('login') }}">Already a member? Login Now !</a>
                        </div>
                        <!-- ================== Redirect on Login page =========================  -->
                        
                    </div>
                    <span class="span-r">
                        <a href="/">Back to Home</a>
                    </span>
                </form>

            </div>
            <!-- =================================== Login Content  =============================== -->
            <div class="img-rp">
                <img src="{{ asset('assets\img\loginpage\img\rp-2.svg') }}" style="filter: drop-shadow(0px 0px 2px black);">
            </div>
        </div>
        <!-- ================================ Login Container ====================================== -->
        <!-- ================== Script of page =========================== -->
        <script type="text/javascript" src="{{ asset('assets\js\login\main.js') }}"></script>
        <script type="text/javascript" src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
        <script type="text/javascript" src="{{ url('js/alan.js') }}"></script>
        <!-- ================== Script of page =========================== -->
    </body>

    </html>
</x-guest-layout>
