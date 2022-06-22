<h3>Requirements Map </h3>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>NeoX Admin - Log in </title>

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

<body class="hold-transition bg-img" style="background-image:url(../../../images/bg-2.jpg)" data-overlay=5>

    <div class="container pt-3 h-p100">
        <div class="row h-p100 justify-content-sm-center align-items-center">
            <div class="col-sm-6 col-md-4">

                <div class="card border-info text-center">
                    <div class="card-header">
                        Sign in to continue
                    </div>
                    <div class="card-body">
                        <img src="../../../images/avatar/2.jpg" class="img-fluid rounded-circle w-150 mb-10">
                        <h4 class="text-center mb-20">LMS Login</h4>
                        <form method="POST" action="{{ route('login') }}" class="form-signin">
                            @csrf

                            <input id="email" type="email"
                                class="form-control mb-2 @error('email') is-invalid @enderror" name="email"
                                placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus>



                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror








                            <input id="password" type="password"
                                class="form-control mb-2 @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" required autocomplete="current-password">


                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror






                            <button class="btn btn-lg btn-primary btn-block mb-20" type="submit">Login</button>


                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif






                            <div class="checkbox float-left">

                                <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>





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
