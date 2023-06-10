
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Admin Dashboard Template" />
        <meta name="keywords" content="Saas, CRM, Admin, Dashboard, Modern, Classic" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v4.0.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="assets1/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{asset('assets1/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- simplebar -->
        <link href="{{asset('assets1/css/simplebar.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{asset('assets1/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets1/css/tabler-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"  rel="stylesheet">
        <!-- Css -->
        <link href="{{asset('assets1/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Hero Start -->
        <section class="bg-home bg-circle-gradiant d-flex align-items-center">
            @yield('content')
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- simplebar -->
        <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
        <!-- Icons -->
        <script src="{{asset('assets/js/feather.min.js')}}"></script>
        <!-- Main Js -->
        <script src="{{asset('assets/js/plugins.init.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>

</html>
