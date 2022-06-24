<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin by Munna</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!--css-->

    <link rel="stylesheet" href="{{ asset('admin/css/plugin.min.css') }}">

    <link rel="stylesheet" href="https://script.viserlab.com/viserremit/assets/admin/css/spectrum.css">

    <link rel="stylesheet" href="https://script.viserlab.com/viserremit/assets/admin/css/vendor/bootstrap-toggle.min.css">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!--css-->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <style>
        .has-child.open ul {
            display: block !important;
        }
    </style>

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

        <div class="contents">
            <div class="container-fluid">

                @yield('admin')

            </div>
        </div>

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


    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script> --}}

    <!-- inject:js-->
    <script src="{{ asset('admin/js/plugins.min.js') }}"></script>
    <script src="https://script.viserlab.com/viserremit/assets/admin/js/spectrum.js"></script>
    <script src="{{ asset('admin/js/toggle.min.js') }}"></script>
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
                case 'danger':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif

        $('.colorPicker').spectrum({
            color: $(this).data('color'),
            change: function(color) {
                $(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, ''));
            }
        });

        $('.colorCode').on('input', function() {
            var clr = $(this).val();
            $(this).parents('.input-group').find('.colorPicker').spectrum({
                color: clr,
            });
        });

        $('select[name=timezone]').val("'Asia/Tehran'").select2();
        $('.select2-basic').select2({
            dropdownParent: $('.card-body')
        });

        var current = location.pathname.split("/")[1];
        $(".sidebar_nav li a").each(function() {
            if ($(this).attr("href").indexOf(current) !== -1 && current != "") {
                $(this).addClass("active");
            }
        });
        $(".sidebar_nav li a.active").parent("li").parent('ul').parent('.sidebar_nav li').addClass("open");
    </script>

</body>

</html>
