<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">
    <title>{{ $titre }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset ('admin/plugins/materialdesignicons/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('admin/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset ('admin/plugins/simplebar/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset ('admin/plugins/slick/slick.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('admin/plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link id="ekka-css" href="{{ asset ('admin/css/ekka.css') }}" rel="stylesheet">
    <link href="{{ asset ('admin/img/favicon.png') }}" rel="shortcut icon">
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">
    <div class="wrapper">

        @include('administration.layouts.sidebar')

        <div class="ec-page-wrapper">

            @include('administration.layouts.topbar')

            <div class="ec-content-wrapper">
                @yield('admin_content')
            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>Copyright &copy; <span id="ec-year"></span><a class="text-primary" target="_blank">Ekka Admin Dashboard</a>. All Rights Reserved.</p>
                </div>
            </footer>

        </div>
    </div>

    @include('administration.layouts.script')

</body>
</html>