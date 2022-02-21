<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VS Home Services - OnDemand Home Services for your House Needs</title>   
    <link rel="manifest" href="/manifest.json">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/d-logo.png') }}">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    {{-- animate-on-scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ url('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{-- <link href="{{ url('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen"> --}}
    <link href="{{ url('assets/css/custom_css.css') }}" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css"
        rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet"
        type="text/css" />

    <script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    
    {{-- <script type="text/javascript" src="{{ url('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/modernizr.js') }}"></script> --}}

    {{-- <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="TS~Bot🤖" agent-id="b2e19dfa-a91a-41a6-b95c-df77b673663c"
        language-code="en" chat-icon="{{ asset('images\chatbot.gif') }}"></df-messenger> --}}
</head>

<body>
    <div class="info-head">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="visible-md visible-lg text-left">
                        <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a></li>
                        <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                vshomeservices22@gmail.com</a></li>
                    </ul>
                    <ul class="visible-xs visible-sm">
                        <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                +91-1234567890</a></li>
                        <li class="text-right"><a href="index.php/changelocation.html"><i
                                    class="fa fa-map-marker"></i> Uttar Pradesh, Lucknow</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="visible-md visible-lg text-right">
                        <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Uttar Pradesh,
                                Lucknow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="header-v3 ">
        <nav class="flat-mega-menu ">
            <label for="mobile-button"> <i class="fa fa-bars"></i></label>
            <input id="mobile-button" type="checkbox">

            <ul class="collapse">
                <li class="title">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="width:180px;"></a>
                </li>
                <li> <a href="{{ route('home') }}">Home</a> </li>

                <li> <a href="{{ route('home.service_categories') }}">Service Category</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="/disinfection/services">Disinfection</a></li>
                        <li><a href="/Electrician/services">Electrician</a></li>
                        <li><a href="/Electronic/services">Electronic</a></li>
                        <li><a href="/Carpenter/services">Carpenter</a></li>
                        <li><a href="/service-categories">More Categories</a></li>
                    </ul>
                </li>
                <li> <a href="/disinfection/services">Disinfection<sup
                            class="badge badge-danger" style="margin-left:2px"><small>New</small></sup></a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="/service/small-offices-businesses-shops-disinfection">Small
                                Offices</a></li>
                        <li><a href="/service/disinfection-service-for-large-offices5000sqft">Large
                                Offices</a></li>
                        <li><a href="/service/home-and-vehicle-disinfection-service">Home&
                                Vehical</a></li>
                        <li><a href="/disinfection/services">More Services</a></li>
                    </ul>

                </li>



                <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                <li>
                    <center>
                        <div class="trans-section">
                            <div id="google_translate_element" style="display: none;"></div>
                            <select class="selectpicker" data-width="fit" onchange="translateLanguage(this.value);">
                                <option data-content='<span class="flag-icon flag-icon-us"></span> English'
                                    value="English">
                                    English</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Hindi' value="Hindi">
                                    Hindi</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Marathi'
                                    value="Marathi">
                                    Marathi</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Punjabi'
                                    value="Punjabi">
                                    Punjabi</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Malayalam'
                                    value="Malayalam">Malayalam</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Tamil' value="Tamil">
                                    Tamil</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Telugu'
                                    value="Telugu">
                                    Telugu</option>
                                <option data-content='<span class="flag-icon flag-icon-in"></span> Gujarati'
                                    value="Gujarati">Gujarati</option>
                                <option data-content='<span class="flag-icon flag-icon-ne"></span> Nepali'
                                    value="Nepali">
                                    Nepali</option>
                                <option data-content='<span class="flag-icon flag-icon-pk"></span> Urdu' value="Urdu">
                                    Urdu</option>
                                <option data-content='<span class="flag-icon flag-icon-af"></span> Afrikaans'
                                    value="Afrikaans">Afrikaans</option>
                                <option data-content='<span class="flag-icon flag-icon-al"></span> Albanian'
                                    value="Albanian">Albanian</option>
                                <option data-content='<span class="flag-icon flag-icon-ar"></span> Arabic'
                                    value="Arabic">
                                    Arabic</option>
                                <option data-content='<span class="flag-icon flag-icon-am"></span> Armenian'
                                    value="Armenian">Armenian</option>
                                <option data-content='<span class="flag-icon flag-icon-az"></span> Azerbaijani'
                                    value="Azerbaijani">Azerbaijani</option>
                                <option data-content='<span class="flag-icon flag-icon-eu"></span> Basque'
                                    value="Basque">
                                    Basque</option>
                                <option data-content='<span class="flag-icon flag-icon-be"></span> Belarusian'
                                    value="Belarusian">Belarusian</option>
                                <option data-content='<span class="flag-icon flag-icon-bn"></span> Bengali'
                                    value="Bengali">
                                    Bengali</option>
                                <option data-content='<span class="flag-icon flag-icon-bs"></span> Bosnian'
                                    value="Bosnian">
                                    Bosnian</option>
                                <option data-content='<span class="flag-icon flag-icon-bg"></span> Bulgarian'
                                    value="Bulgarian">Bulgarian</option>
                                <option data-content='<span class="flag-icon flag-icon-cu"></span> Catalan'
                                    value="Catalan">
                                    Catalan</option>
                                <option data-content='<span class="flag-icon flag-icon-cn"></span> Chinese (Simplified)'
                                    value="Chinese (Simplified)">Chinese (Simplified)</option>
                                <option
                                    data-content='<span class="flag-icon flag-icon-tw"></span> Chinese (Traditional)'
                                    value="Chinese (Traditional)">Chinese (Traditional)</option>
                                <option data-content='<span class="flag-icon flag-icon-co"></span> Corsican'
                                    value="Corsican">Corsican</option>
                                <option data-content='<span class="flag-icon flag-icon-hr"></span> Croatian'
                                    value="Croatian">Croatian</option>
                                <option data-content='<span class="flag-icon flag-icon-cz"></span> Czech' value="Czech">
                                    Czech</option>
                                <option data-content='<span class="flag-icon flag-icon-dk"></span> Danish'
                                    value="Danish">
                                    Danish</option>
                                <option data-content='<span class="flag-icon flag-icon-nl"></span> Dutch' value="Dutch">
                                    Dutch</option>

                                <option data-content='<span class="flag-icon flag-icon-et"></span> Estonian'
                                    value="Estonian">Estonian</option>
                                <option data-content='<span class="flag-icon flag-icon-fi"></span> Finnish'
                                    value="Finnish">
                                    Finnish</option>
                                <option data-content='<span class="flag-icon flag-icon-fr"></span> French'
                                    value="French">
                                    French</option>
                                <option data-content='<span class="flag-icon flag-icon-gl"></span> Galician'
                                    value="Galician">Galician</option>
                                <option data-content='<span class="flag-icon flag-icon-ge"></span> Georgian'
                                    value="Georgian">Georgian</option>
                                <option data-content='<span class="flag-icon flag-icon-de"></span> German'
                                    value="German">
                                    German</option>
                                <option data-content='<span class="flag-icon flag-icon-gr"></span> Greek' value="Greek">
                                    Greek</option>

                                <option data-content='<span class="flag-icon flag-icon-ht"></span> Haitian Creole'
                                    value="Haitian Creole">Haitian Creole</option>
                                <option data-content='<span class="flag-icon flag-icon-il"></span> Hebrew'
                                    value="Hebrew">
                                    Hebrew</option>
                                <option data-content='<span class="flag-icon flag-icon-hu"></span> Hungarian'
                                    value="Hungarian">Hungarian</option>
                                <option data-content='<span class="flag-icon flag-icon-is"></span> Icelandic'
                                    value="Icelandic">Icelandic</option>
                                <option data-content='<span class="flag-icon flag-icon-id"></span> Indonesian'
                                    value="Indonesian">Indonesian</option>
                                <option data-content='<span class="flag-icon flag-icon-ga"></span> Irish' value="Irish">
                                    Irish</option>
                                <option data-content='<span class="flag-icon flag-icon-it"></span> Italian'
                                    value="Italian">
                                    Italian</option>
                                <option data-content='<span class="flag-icon flag-icon-jp"></span> Japanese'
                                    value="Japanese">Japanese</option>
                                <option data-content='<span class="flag-icon flag-icon-kn"></span> Kannada'
                                    value="Kannada">
                                    Kannada</option>
                                <option data-content='<span class="flag-icon flag-icon-kz"></span> Kazakh'
                                    value="Kazakh">
                                    Kazakh</option>
                                <option data-content='<span class="flag-icon flag-icon-km"></span> Khmer' value="Khmer">
                                    Khmer</option>
                                <option data-content='<span class="flag-icon flag-icon-rw"></span> Kinyarwanda'
                                    value="Kinyarwanda">Kinyarwanda</option>
                                <option data-content='<span class="flag-icon flag-icon-kr"></span> Korean'
                                    value="Korean">
                                    Korean</option>
                                <option data-content='<span class="flag-icon flag-icon-ir"></span> Kurdish'
                                    value="Kurdish (Kurmanji)">Kurdish</option>
                                <option data-content='<span class="flag-icon flag-icon-ky"></span> Kyrgyz'
                                    value="Kyrgyz">
                                    Kyrgyz</option>
                                <option data-content='<span class="flag-icon flag-icon-la"></span> Lao' value="Lao">Lao
                                </option>
                                <option data-content='<span class="flag-icon flag-icon-lv"></span> Latvian'
                                    value="Latvian">
                                    Latvian</option>
                                <option data-content='<span class="flag-icon flag-icon-lt"></span> Lithuanian'
                                    value="Lithuanian">Lithuanian</option>
                                <option data-content='<span class="flag-icon flag-icon-lb"></span> Luxembourgish'
                                    value="Luxembourgish">Luxembourgish</option>
                                <option data-content='<span class="flag-icon flag-icon-mk"></span> Macedonian'
                                    value="Macedonian">Macedonian</option>
                                <option data-content='<span class="flag-icon flag-icon-mg"></span> Malagasy'
                                    value="Malagasy">Malagasy</option>
                                <option data-content='<span class="flag-icon flag-icon-ms"></span> Malay' value="Malay">
                                    Malay</option>

                                <option data-content='<span class="flag-icon flag-icon-mt"></span> Maltese'
                                    value="Maltese">
                                    Maltese</option>

                                <option data-content='<span class="flag-icon flag-icon-mn"></span> Mongolian'
                                    value="Mongolian">Mongolian</option>
                                <option data-content='<span class="flag-icon flag-icon-my"></span> Myanmar (Burmese)'
                                    value="Myanmar (Burmese)">Myanmar (Burmese)</option>

                                <option data-content='<span class="flag-icon flag-icon-no"></span> Norwegian'
                                    value="Norwegian">Norwegian</option>
                                <option data-content='<span class="flag-icon flag-icon-mw"></span> Nyanja (Chichewa)'
                                    value="Nyanja (Chichewa)">Nyanja (Chichewa)</option>
                                <option data-content='<span class="flag-icon flag-icon-ps"></span> Pashto'
                                    value="Pashto">
                                    Pashto</option>
                                <option data-content='<span class="flag-icon flag-icon-pl"></span> Polish'
                                    value="Polish">
                                    Polish</option>
                                <option
                                    data-content='<span class="flag-icon flag-icon-pt"></span> Portuguese (Portugal, Brazil)'
                                    value="Portuguese (Portugal, Brazil)">Portuguese (Portugal, Brazil)</option>

                                <option data-content='<span class="flag-icon flag-icon-ro"></span> Romanian'
                                    value="Romanian">Romanian</option>
                                <option data-content='<span class="flag-icon flag-icon-ru"></span> Russian'
                                    value="Russian">
                                    Russian</option>
                                <option data-content='<span class="flag-icon flag-icon-sm"></span> Samoan'
                                    value="Samoan">
                                    Samoan</option>
                                <option data-content='<span class="flag-icon flag-icon-gd"></span> Scots Gaelic'
                                    value="Scots Gaelic">Scots Gaelic</option>
                                <option data-content='<span class="flag-icon flag-icon-sr"></span> Serbian'
                                    value="Serbian">
                                    Serbian</option>
                                <option data-content='<span class="flag-icon flag-icon-st"></span> Sesotho'
                                    value="Sesotho">
                                    Sesotho</option>
                                <option data-content='<span class="flag-icon flag-icon-sn"></span> Shona' value="Shona">
                                    Shona</option>
                                <option data-content='<span class="flag-icon flag-icon-sd"></span> Sindhi'
                                    value="Sindhi">
                                    Sindhi</option>
                                <option data-content='<span class="flag-icon flag-icon-si"></span> Sinhala (Sinhalese)'
                                    value="Sinhala (Sinhalese)">Sinhala (Sinhalese)</option>
                                <option data-content='<span class="flag-icon flag-icon-sk"></span> Slovak'
                                    value="Slovak">
                                    Slovak</option>
                                <option data-content='<span class="flag-icon flag-icon-sl"></span> Slovenian'
                                    value="Slovenian">Slovenian</option>
                                <option data-content='<span class="flag-icon flag-icon-so"></span> Somali'
                                    value="Somali">
                                    Somali</option>
                                <option data-content='<span class="flag-icon flag-icon-es"></span> Spanish'
                                    value="Spanish">
                                    Spanish</option>
                                <option data-content='<span class="flag-icon flag-icon-sv"></span> Swedish'
                                    value="Swedish">Swedish</option>
                                <option data-content='<span class="flag-icon flag-icon-tl"></span> Tagalog (Filipino)'
                                    value="Tagalog (Filipino)">Tagalog (Filipino)</option>
                                <option data-content='<span class="flag-icon flag-icon-tg"></span> Tajik'
                                    value="Tajik">
                                    Tajik</option>
                                <option data-content='<span class="flag-icon flag-icon-tt"></span> Tatar'
                                    value="Tatar">
                                    Tatar</option>
                                <option data-content='<span class="flag-icon flag-icon-th"></span> Thai' value="Thai">
                                    Thai</option>
                                <option data-content='<span class="flag-icon flag-icon-tr"></span> Turkish'
                                    value="Turkish">Turkish</option>
                                <option data-content='<span class="flag-icon flag-icon-tk"></span> Turkmen'
                                    value="Turkmen">Turkmen</option>
                                <option data-content='<span class="flag-icon flag-icon-ua"></span> Ukrainian'
                                    value="Ukrainian">Ukrainian</option>
                                <option data-content='<span class="flag-icon flag-icon-ug"></span> Uyghur'
                                    value="Uyghur">
                                    Uyghur</option>
                                <option data-content='<span class="flag-icon flag-icon-uz"></span> Uzbek'
                                    value="Uzbek">
                                    Uzbek</option>
                                <option data-content='<span class="flag-icon flag-icon-vi"></span> Vietnamese'
                                    value="Vietnamese">Vietnamese</option>
                                <option data-content='<span class="flag-icon flag-icon-cy"></span> Welsh'
                                    value="Welsh">
                                    Welsh</option>
                                <option data-content='<span class="flag-icon flag-icon-zw"></span> Xhosa'
                                    value="Xhosa">
                                    Xhosa</option>
                            </select>
                        </div>
                    </center>
                </li>
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->u_type === 'ADM')
                            <li class="login-form"><a href="#" title="Register"> <i class="fa fa-user"
                                        aria-hidden="true">
                                        {{ Auth::user()->name }}(Admin)</i></a>
                                <ul class="drop-down one-column hover-fade">

                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @elseif(Auth::user()->u_type === 'SPV')
                            <li class="login-form"><a href="#" title="Register"><i class="fa fa-user"
                                        aria-hidden="true">
                                        {{ Auth::user()->name }} ( @if (Auth::user()->service_category_id)
                                            {{ Auth::user()->category->name }}
                                        @endif
                                        )</i></a>
                                <ul class="drop-down one-column hover-fade">
                                    <li><a href="{{ route('sprovider.dashboard') }}"><strong>Dashboard</strong></a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="login-form"> <i class="fa fa-user-circle" aria-hidden="true">
                                    <strong> {{ Auth::user()->name }} (Customer) </strong></i>
                                <ul class="drop-down one-column hover-fade">
                                    <li><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                            @csrf
                        </form>
                    @else
                        <li class="login-form"> <a href="{{ route('register') }}" title="Register">Register</a>
                        </li>
                        <li class="login-form"> <a href="{{ route('login') }}" title="Login">Login</a></li>
                    @endif
                    @endif
                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>

        <!-- preloader start -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>


            </div>
            <br>
            <h5>Please Wait Loading..... </h5>

        </div>
        <!-- End Preloader ==================================== -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 200,
                duration: 600,
                easing: 'ease-in-sine',
                delay: 100,
            });
        </script>
        {{-- alan Ai --}}
        <script type="text/javascript" src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
        <script type="text/javascript" src="{{ url('js/alan.js') }}"></script>
