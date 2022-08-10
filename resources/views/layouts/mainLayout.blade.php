<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="/images/favicon.ico" />

    <title>LMS</title>

    {{-- select2 --}}


    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css" />

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="/css/bootstrap-extend.css" />

    <!-- theme style -->
    <link rel="stylesheet" href="/css/master_style.css" />

    <!-- NeoX Admin skins -->
    <link rel="stylesheet" href="/css/skins/_all-skins.css" />
    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
        .circle {
            padding: 13px 20px;
            border-radius: 50%;
            background-color: #ED8D8D;
            color: #fff;
            max-height: 50px;
            z-index: 2;
        }

        .how-it-works.row .col-2 {
            align-self: stretch;
        }

        .how-it-works.row .col-2::after {
            content: "";
            position: absolute;
            border-left: 3px solid #ED8D8D;
            z-index: 1;
        }

        .how-it-works.row .col-2.bottom::after {
            height: 50%;
            left: 50%;
            top: 50%;
        }

        .how-it-works.row .col-2.full::after {
            height: 100%;
            left: calc(50% - 3px);
        }

        .how-it-works.row .col-2.top::after {
            height: 50%;
            left: 50%;
            top: 0;
        }


        .timelinenew div {
            padding: 0;
            height: 40px;
        }

        .timelinenew hr {
            border-top: 3px solid #ED8D8D;
            margin: 0;
            top: 17px;
            position: relative;
        }

        .timelinenew .col-2 {
            display: flex;
            overflow: hidden;
        }

        .timelinenew .corner {
            border: 3px solid #ED8D8D;
            width: 100%;
            position: relative;
            border-radius: 15px;
        }

        .timelinenew .top-right {
            left: 50%;
            top: -50%;
        }

        .timelinenew .left-bottom {
            left: -50%;
            top: calc(50% - 3px);
        }

        .timelinenew .top-left {
            left: -50%;
            top: -50%;
        }

        .timelinenew .right-bottom {
            left: 50%;
            top: calc(50% - 3px);
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

        @include('layouts.header')

        <!-- Left side column. contains the logo and sidebar -->

        @include('layouts.asideL')

        <div class="content-wrapper">
            <!-- Main content -->

            @if (session('success'))
                <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="col-sm-12">
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <section class="content">


                @yield('content')


            </section>
            <!-- /.content -->
        </div>


        <!-- /.content-wrapper -->
        @include('layouts.footer')

        <!-- Control Sidebar -->

        {{-- @if (Auth()->user()->id == 1)
            @include('layouts.asideR')
        @endif --}}
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        {{-- <div class="control-sidebar-bg"></div>
    </div> --}}
        <!-- ./wrapper -->





        <!-- jQuery UI 1.11.4 -->
        <script src="/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>

        <!-- popper -->
        <script src="/assets/vendor_components/popper/dist/popper.min.js"></script>

        <!-- Bootstrap 4.0-->
        <script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

        <!-- Slimscroll -->
        <script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- FastClick -->
        <script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script>

        <!-- apexcharts -->
        {{-- <script src="/assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script> --}}
        {{-- <script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> --}}

        <!-- peity -->
        <script src="/assets/vendor_components/jquery.peity/jquery.peity.js"></script>

        <!-- NeoX Admin App -->
        <script src="/js/template.js"></script>

        <!-- NeoX Admin dashboard demo (This is only for demo purposes) -->
        <script src="/js/pages/dashboard.js"></script>

        <!-- NeoX Admin for demo purposes -->
        <script src="/js/demo.js"></script>


        <script src="/assets/vendor_components/datatable/datatables.min.js"></script>

        <!-- NeoX Admin for Data Table -->
        <script src="/js/pages/data-table.js"></script>

        {{-- select2 --}}
        {{-- <script src="///assets/vendor_components/select2/dist/js/select2.full.js"></script> --}}


        <script src="/js/app.js"></script>


        <script></script>

</body>

</html>
