<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title> Registration </title>

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

    <div class="container pt-3 h-p100">
        <div class="row h-p100 justify-content-sm-center align-items-center">
            <div class="col-sm-6 col-md-4">

                <div class="card border-info text-center">
                    <div class="card-header">
                        Register a new User
                    </div>
                    <div class="card-body">
                        <img src="../../../images/holi.png" class="img-fluid rounded-circle w-150 mb-10">
                        <h4 class="text-center mb-20">LMS Registration</h4>
                        <form action="{{ route('register') }}" method="POST" class="form-signin">

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

                            @csrf
                            <input id="name" type="text"
                                class="form-control mb-2 @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" placeholder="Name" autocomplete="name" autofocus>

                            <span class="invalid-feedback" role="alert"><strong>
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </strong></span>



                            <input id="email" type="email"
                                class="form-control mb-2 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="Email" autocomplete="email">

                            <span class="invalid-feedback" role="alert"><strong>
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </strong></span>



                            <input id="password" type="password"
                                class="form-control mb-2 @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" autocomplete="new-password">

                            <span class="invalid-feedback" role="alert"><strong>
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </strong></span>










                            <input id="password-confirm" type="password" class="form-control mb-2"
                                name="password_confirmation" placeholder="Retype Password" autocomplete="new-password">


                            <span class="invalid-feedback" role="alert"><strong>
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </strong></span>



                            <button class="btn btn-lg btn-primary btn-block mb-20"
                                type="submit">{{ __('Register') }}</button>






                        </form>
                    </div>
                </div>
                <p class="float-right text-white"><b>Already have an
                        account?</b><a href="{{ route('login') }}" class="text-primary m-l-5">
                        Log In</a></p>
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
