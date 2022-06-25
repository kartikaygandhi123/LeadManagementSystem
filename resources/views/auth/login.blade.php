<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Log in</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../../css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../css/master_style.css">

    <!-- NeoX Admin skins -->
    <link rel="stylesheet" href="../../css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body class="hold-transition bg-img" style="background-image:url(../../../images/holisol.jpg)" data-overlay=5>


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




    <div class="container pt-3 h-p100">
        <div class="row h-p100 justify-content-sm-center align-items-center">
            <div class="col-sm-6 col-md-4">

                <div class="card border-info text-center">
                    <div class="card-header">
                        Log in to continue
                    </div>
                    <div class="card-body">
                        <img src="../../../images/holi.png" class="img-fluid rounded-circle w-150 mb-10">
                        <h4 class="text-center mb-20">LMS Login</h4>
                        <form method="POST" action="{{ route('login') }}" class="form-signin">
                            @csrf
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if (Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif

                            <input id="email" type="email"
                                class="form-control mb-2 @error('email') is-invalid @enderror" name="email"
                                placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>




                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </span>









                            <input id="password" type="password"
                                class="form-control mb-2 @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" autocomplete="current-password">



                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </strong>
                            </span>








                            <button class="btn btn-lg btn-success btn-block mb-20"
                                type="submit">{{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif






                            <div class="checkbox float-left">

                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember me</label>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="{{ route('register') }}" class="float-right text-white">Create an account </a>
            </div>
        </div>
    </div>


    <!-- jQuery 3 -->
    <script src="../../../assets/vendor_components/jquery/dist/jquery.min.js"></script>

    <!-- popper -->
    <script src="../../../assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
