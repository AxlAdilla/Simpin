<html class="chrome"><head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Koperasi Serba Usaha | LOGIN</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('images/logo_koperasi.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('adminbsb/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('adminbsb/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('adminbsb/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('adminbsb/css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page ls-closed" data-gr-c-s-loaded="true">
    <div class="login-box">
        <div class="logo" style="text-align:center">
            <img src="{{asset('images/logo_koperasi.png')}}" style="width:50%;height:auto;" alt="">
            <a href="javascript:void(0);">Koperasi <b>KSU</b></a>
            <small>Koperasi Serba Usaha BMT Bumi Sejahtera</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{route('login_post')}}" novalidate="novalidate">
                    @csrf
                    <div class="msg">Masukan Username dan Password</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" aria-required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="row" style="text-align:center">
                        <!-- <div class="col-xs-4"> -->
                            <button class="btn btn-block bg-red waves-effect" type="submit">SIGN IN</button>
                        <!-- </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Validation Plugin Js -->
    <script src="{{asset('adminbsb/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Jquery Core Js -->
    <script src="{{asset('adminbsb/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('adminbsb/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="{{asset('adminbsb/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script> -->

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('adminbsb/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('adminbsb/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('adminbsb/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('adminbsb/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('adminbsb/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('adminbsb/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('adminbsb/js/admin.js')}}"></script>
    <script src="{{asset('adminbsb/js/pages/examples/sign-in.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('adminbsb/js/demo.js')}}"></script>
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>

    <script >
        @if(session('notifikasi'))
                $.notify({
                // options
                message: "{{session('notifikasi')}}"
            },{
                // settings
                type: "{{session('tipe_notifikasi')}}",
                placement: {
                    from: "bottom",
                    align: "right"
                },
                allow_dismiss: true,
            });
        @endif
        $('.select2').select2({
            width: '100%'
        });
    </script>
</body></html>