<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Koperasi Serba Usaha | @yield('page_title') </title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('images/logo_koperasi.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('adminbsb/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('adminbsb/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('adminbsb/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('adminbsb/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('adminbsb/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('adminbsb/css/themes/all-themes.css')}}" rel="stylesheet" />

    <!-- Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- DataTable-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

    <!-- Font Awsome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    @yield('css')

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Harap Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{route('manajer.dashboard')}}" style="font-weight:800" >KOPERASI SERBA USAHA | KSU</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('adminbsb/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->username}}</div>
                    <div class="email" style="font-weight:800">{{strtoupper(Auth::user()->jabatan)}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('manajer.akun_password',['id'=>Auth::user()->id])}}"><i class="material-icons">vpn_key</i>Ganti Password</a></li>
                        {{--
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu</li>
                    <li @yield('active_anggota')>
                        <a href="{{route('manajer.pendaftaran_index')}}">
                            <i class="material-icons">face</i>
                            <span>Anggota</span>
                        </a>
                    </li>
                    <li @yield('active_simpanan')>
                        <a href="{{route('manajer.simpanan_index')}}">
                            <i class="material-icons">account_balance_wallet</i>
                            <span>Simpanan</span>
                        </a>
                    </li>
                    <li @yield('active_pinjaman')>
                        <a href="{{route('manajer.pinjaman_index')}}">
                            <i class="material-icons">credit_card</i>
                            <span>Pinjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!-- <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div> -->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    @yield('section')

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

    <!-- Flot Charts Plugin Js -->
    <!-- <script src="{{asset('adminbsb/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('adminbsb/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('adminbsb/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('adminbsb/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('adminbsb/plugins/flot-charts/jquery.flot.time.js')}}"></script> -->

    <!-- Sparkline Chart Plugin Js -->
    <!-- <script src="{{asset('adminbsb/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script> -->

    <!-- Custom Js -->
    <script src="{{asset('adminbsb/js/admin.js')}}"></script>
    <script src="{{asset('adminbsb/js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('adminbsb/js/demo.js')}}"></script>
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>

    <!-- Date Range Picker -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- DataTable -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
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
    @yield('js')

</body>

</html>
