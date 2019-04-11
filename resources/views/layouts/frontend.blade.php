<!DOCTYPE html>
<html class="js" lang="en">

<head>
    @yield('head_and_title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/settings.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/util.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/main.css') }}">
    <!--===============================================================================================-->
    <link href="{{ asset('css/frontend/custom.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body>
    {{--<div id="preloader"></div>--}}

    @include('partials.frontend._header')

    @yield('content')

    @include('partials.frontend._footer')

    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/frontend/revo-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/waypoint/jquery.waypoints.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/countterup/jquery.counterup.min.js') }}"></script>
    <!--===============================================================================================-->
    {{--<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/frontend/slick-custom.js') }}"></script>--}}
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/frontend/main.js') }}"></script>

    <script>
        $(window).on('load', function(){
            // $('#preloader').delay(100).fadeOut();
        });

        $('#subscribe_email').on('keydown', function(e) {
            if (e.which == 13 || e.keyCode == 13) {
                let subscribeInput = $('#subscribe_email').val();
                if(!subscribeInput || subscribeInput === ""){
                    return false;
                }
                else{
                    submitSubscribe();
                }
            }
        });

        function submitSubscribe(){
            let email = $('#subscribe_email').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('frontend.subscribe.save') }}',
                datatype : "application/json",
                data: {
                    '_token': '{{ csrf_token() }}',
                    'email': email
                }, // no need to stringify
                success: function (result) {
                    $('#subscribe_success_message').slideDown(500);
                }
            });
        }

        $('#subscrine_submit').on('click', function(e) {
            let subscribeInput = $('#subscribe_email').val();
            if(!subscribeInput || subscribeInput === ""){
                return false;
            }
            else{
                submitSubscribe();
            }
        });

    </script>
    @yield('scripts')

</body>

</html>
