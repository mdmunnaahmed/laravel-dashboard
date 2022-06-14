<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin by Munna</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!--css-->

    <link rel="stylesheet" href="{{ asset('admin/css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!--css-->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

</head>

<body class="layout-light side-menu overlayScroll">
    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>

    <div class="mobile-author-actions"></div>


    @include('admin.partials.header')




    <main class="main-content">


        @include('admin.partials.sidebar')

        @yield('admin')

        @include('admin.partials.footer')


    </main>

    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>


    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>

    <a href="#" class="customizer-trigger"><span data-feather="settings"></span></a>

    {{-- <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <span data-feather="x"></span></a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/ltr" class="active">
                                <img src="img/ltr.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/rtl" class="">
                                <img src="img/rtl.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="active">
                                <img src="img/light.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark">
                                <img src="img/dark.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="img/side.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="img/top.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->
            </div>
        </div>
    </div> --}}

    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script> --}}
    <!-- inject:js-->
    <script src="{{ asset('admin/js/plugins.min.js') }}"></script>
    <script src="{{ asset('admin/js/script.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- endinject-->

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

</body>

</html>
