
<x-guest-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Page</title>
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
                <img src="{{ asset('assets\img\loginpage\img\lp-1.svg') }}" style="filter: drop-shadow(0px 0px 4px black);">
            </div>
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-lp">


                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img src="{{ asset('https://cdn-icons-png.flaticon.com/512/1995/1995670.png') }}"
                        style="filter: drop-shadow(0px 0px 3px black)">
                    <h2 class="title">Welcome</h2>
                    <x-jet-validation-errors />
                    @if (session('status'))
                        <div class="font-medium text-md text-green-600">
                            <h6 style="color: #1597e5; text-align:center">{{ session('status') }}</h6>
                        </div>
                    @endif
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email Id</h5>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input validate">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i-lp">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" name="password" required="" class="input">
                        </div>
                    </div>
                    <div class="flex-sb-m">
                        <!-- ============================Remember Me =========================  -->
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" type="checkbox" id="remember_me" name="remember-me">
                            <label class="label-checkbox100" for="remember_me">
                                Remember me
                            </label>
                        </div>
                        <!-- ============================Remember Me =========================  -->
                        <!-- ============================Forgot Password =========================  -->
                        <div class="forgot-p">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <!-- ============================Forgot Password =========================  -->
                    </div>
                    <button type="submit" class="btn-lp">Login<i class="fa fa-sign-in"
                            aria-hidden="true"></i></button>
                    <!-- ================ Redirect on Registration page ===================== -->
                    <div class="">
                        <span class="span-r"> Not a member?
                            <a href="{{ route('register') }}">Sign up now!</a>
                        </span>
                    </div>
                    <span class="span-r">
                        <a href="/">Back to Home</a>
                    </span>
                </form>


            </div>
            <!-- =================================== Login Content  =============================== -->

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
