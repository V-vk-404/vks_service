<div>
    <!DOCTYPE html>
    <html lang="en" class="loading">
    <!-- BEGIN : Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
        <meta name="description"
            content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords"
            content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>VS Home Services Dashboard</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <link
            href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
            rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <!-- font icons-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/feather/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/perfect-scrollbar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/prism.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/chartist.min.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN APEX CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
        <style>
                th {
                    vertical-align: top !important;
                }
    
                body>div:nth-child(2)>div>div>div.app-sidebar>li>a {
                    display: none !important;
                }
    
                .page-item.active .page-link {
                    z-index: 3;
                    color: #fff !important;
                    background-color: #00ACD6 !important;
                    border-color: #00ACD6 !important;
                    border-radius: 50%;
                    padding: 6px 12px;
                    ;
                }
    
                .page-link {
                    z-index: 3;
                    color: #00ACD6 !important;
                    background-color: #fff;
                    border-color: #007bff;
                    border-radius: 50%;
                    padding: 6px 12px !important;
                }
    
                .page-item:first-child .page-link {
                    border-radius: 30% !important;
                    /* display :none !important */
    
                }
    
                .page-item:last-child .page-link {
                    border-radius: 30% !important;
                    /* display :none !important */
                }
    
                .pagination li {
                    padding: 3px;
                }
    
                .disabled .page-link {
                    color: #1597e5 !important;
                    opacity: 0.5 !important;
                }
    
                .justify-content-end {
                    justify-content: flex-start !important;
                }
    
                /* Let's get this party started */
                ::-webkit-scrollbar {
                    width: 10px;
                }
    
                /* Track */
                ::-webkit-scrollbar-track {
                    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                    -webkit-border-radius: 10px;
                    border-radius: 10px;
                }
    
                /* Handle */
                ::-webkit-scrollbar-thumb {
                    -webkit-border-radius: 10px;
                    border-radius: 10px;
                    background-color: #63a4ff !important;
                    background-image: linear-gradient(315deg,
                            #63a4ff 0%,
                            #83eaf1 74%) !important;
                    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
                }
    
                ::-webkit-scrollbar-thumb:window-inactive {
                    background-color: #63a4ff !important;
                    background-image: linear-gradient(315deg,
                            #63a4ff 0%,
                            #83eaf1 74%) !important;
                }
    
            </style>
        @livewireStyles
        <!-- END APEX CSS-->
        <!-- BEGIN Page Level CSS-->
        <!-- END Page Level CSS-->
    </head>
    <!-- END : Head-->

    <!-- BEGIN : Body-->

    <body data-col="2-columns" class=" 2-columns  layout-dark">
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="wrapper">
            {{ $slot }}
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <!-- Theme customizer Starts-->
        <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a
                class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon"
                class="customizer-toggle bg-danger"><i
                    class="ft-settings font-medium-4 fa fa-spin white justify-content-center mt-2"></i></a>
            <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a"
                class="customizer-content p-3 ps-container ps-theme-dark">
                <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
                <p>Customize & Preview in Real Time</p>
                <hr>
                <!-- Layout Options-->
                <h6 class="text-center text-bold-500 mb-3 text-uppercase">Layout Options</h6>
                <div class="layout-switch ml-4">
                    <div class="custom-control custom-radio d-inline-block custom-control-inline light-layout">
                        <input id="ll-switch" type="radio" name="layout-switch" checked class="custom-control-input">
                        <label for="ll-switch" class="custom-control-label">Light</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block custom-control-inline dark-layout">
                        <input id="dl-switch" type="radio" name="layout-switch" class="custom-control-input">
                        <label for="dl-switch" class="custom-control-label">Dark</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block custom-control-inline transparent-layout">
                        <input id="tl-switch" type="radio" name="layout-switch" class="custom-control-input">
                        <label for="tl-switch" class="custom-control-label">Transparent</label>
                    </div>
                </div>
                <hr>
                <!-- Sidebar Options Starts-->
                <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-options">Sidebar Color Options</h6>
                <div class="cz-bg-color sb-color-options">
                    <div class="row p-1">
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate"
                                class="gradient-pomegranate d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna"
                                class="gradient-king-yna d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset"
                                class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr"
                                class="gradient-flickr d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss"
                                class="gradient-purple-bliss d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel"
                                class="gradient-man-of-steel d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love"
                                class="gradient-purple-love d-block rounded-circle"></span></div>
                    </div>
                    <div class="row p-1">
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="black"
                                class="bg-black d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="white"
                                class="bg-grey d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary"
                                class="bg-primary d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="success"
                                class="bg-success d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning"
                                class="bg-warning d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="info"
                                class="bg-info d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger"
                                class="bg-danger d-block rounded-circle"></span></div>
                    </div>
                </div>
                <!-- Sidebar Options Ends-->
                <!-- Transparent Layout Bg color Options-->
                <h6 class="text-center text-bold-500 mb-3 text-uppercase tl-color-options d-none">Background Colors
                </h6>
                <div class="cz-tl-bg-color d-none">
                    <div class="row p-1">
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="hibiscus"
                                class="bg-hibiscus d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;"
                                data-bg-color="bg-purple-pizzazz"
                                class="bg-purple-pizzazz d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;"
                                data-bg-color="bg-blue-lagoon" class="bg-blue-lagoon d-block rounded-circle"></span>
                        </div>
                        <div class="col"><span style="width:20px; height:20px;"
                                data-bg-color="bg-electric-viloet"
                                class="bg-electric-violet d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-protage"
                                class="bg-portage d-block rounded-circle"></span></div>
                        <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-tundora"
                                class="bg-tundora d-block rounded-circle"></span></div>
                    </div>
                </div>
                <!-- Transparent Layout Bg color Ends-->
                <hr>
                <!-- Sidebar BG Image Starts-->
                <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-bg-img">Sidebar Bg Image</h6>
                <div class="cz-bg-image row sb-bg-img">
                    <div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" width="90"
                            class="rounded sb-bg-01">
                    </div>
                    <div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/02.jpg') }}" width="90"
                            class="rounded sb-bg-02">
                    </div>
                    <div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/03.jpg') }}" width="90"
                            class="rounded sb-bg-03">
                    </div>
                    <div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/04.jpg') }}" width="90"
                            class="rounded sb-bg-04">
                    </div>
                    <div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/05.jpg') }}" width="90"
                            class="rounded sb-bg-05">
                    </div>
                    <div class="col-sm-2 mb-3"><img src="{{ asset('app-assets/img/sidebar-bg/06.jpg') }}" width="90"
                            class="rounded sb-bg-06">
                    </div>
                </div>
                <!-- Transparent BG Image Ends-->
                <div class="tl-bg-img d-none">
                    <h6 class="text-center text-bold-500 text-uppercase">Background Images</h6>
                    <div class="cz-tl-bg-image row">
                        <div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-1.jpg') }}"
                                width="90" class="rounded bg-glass-1 selected"></div>
                        <div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-2.jpg') }}"
                                width="90" class="rounded bg-glass-2">
                        </div>
                        <div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-3.jpg') }}"
                                width="90" class="rounded bg-glass-3">
                        </div>
                        <div class="col-sm-3"><img src="{{ asset('app-assets/img/gallery/bg-glass-4.jpg') }}"
                                width="90" class="rounded bg-glass-4">
                        </div>
                    </div>
                </div>
                <!-- Transparent BG Image Ends    -->
                <hr>
                <!-- Sidebar Width Starts-->
                <div>
                    <label for="cz-sidebar-width">Sidebar Width</label>
                    <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                        <option value="small">Small</option>
                        <option value="medium" selected="">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
                <!-- Sidebar Width Ends-->
            </div>
        </div>
        <!-- Theme customizer Ends-->
        <!-- BEGIN VENDOR JS-->
        <script src="{{ asset('app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/prism.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/screenfull.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/js/pace/pace.min.js') }}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{ asset('app-assets/vendors/js/chartist.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN APEX JS-->
        <script src="{{ asset('app-assets/js/app-sidebar.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/js/notification-sidebar.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/js/customizer.js') }}" type="text/javascript"></script>
        <!-- END APEX JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('app-assets/js/dashboard1.js') }}" type="text/javascript"></script>
        @livewireScripts
        <!-- END PAGE LEVEL JS-->
    </body>
    <!-- END : Body-->

    </html>
</div>
