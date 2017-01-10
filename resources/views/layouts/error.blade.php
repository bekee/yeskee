<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">


@section('css')
    <!-- Base Css Files -->
        <link href="{{URL::asset('loggedin/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}"
              rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/pace/pace.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('loggedin/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet"/>
        <!-- Code Highlighter for Demo -->
        <link href="{{URL::asset('loggedin/assets/libs/prettify/github.css')}}" rel="stylesheet"/>

        <link href="{{URL::asset('loggedin/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Extra CSS Libraries End -->
        <link href="{{URL::asset('loggedin/assets/css/style-responsive.css')}}" rel="stylesheet"/>


@show
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <link rel="shortcut icon" href="{{asset('guest/img/logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('guest/img/logo.png')}}"/>
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{asset('guest/img/logo.png')}}"/>
</head>
<body class="@yield('login-page')")>
<!-- Modal Start -->
<!-- Modal Task Progress -->

@show

@section('load_script')
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('loggedin/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-detectmobile/detect.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/fastclick/fastclick.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/nifty-modal/js/classie.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/sortable/sortable.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/pace/pace.min.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('loggedin/assets/libs/jquery-icheck/icheck.min.js')}}"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="{{URL::asset('loggedin/assets/libs/prettify/prettify.js')}}"></script>

    <script src="{{URL::asset('loggedin/assets/js/init.js')}}"></script>
    <!-- Page Specific JS Libraries -->

@show


</body>
</html>
