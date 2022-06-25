<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>ADMINISTRATION | LOGIN</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css') }}">

    <!-- core css -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-in-2">
                <div class="container-fluid no-pdd-horizon bg" style="background: #212121;">
                    <div class="row">
                        <div class="col-md-10 mr-auto ml-auto">
                            <div class="row">
                                <div class="mr-auto ml-auto full-height height-100 d-flex align-items-center">
                                    <div class="vertical-align full-height">
                                        <div class="table-cell">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="pdd-horizon-30 pdd-vertical-30">
                                                        <div class="mrg-btm-30 text-center">
                                                            <img class="img-responsive inline-block" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                                                            {{-- <h2 class="inline-block pull-right no-mrg-vertical pdd-top-15">Login</h2> --}}
                                                        </div>
                                                        <p class="mrg-btm-15 font-size-13">Please enter your <b class="text-warning">EMAIL</b> and <b class="text-warning">PASSWORD</b> to login</p>
                                                        <form method="POST" action="{{ route('loginWithUser') }}">
                                                            @csrf

                                                            <div class="form-group">
                                                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="user@mail.com">

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="checkbox checkbox-warning font-size-13 inline-block no-mrg-vertical no-pdd-vertical">
                                                                <input id="agreement" name="agreement" type="checkbox">
                                                                <label for="agreement" class="m-b-0 text-bold text-warning">Keep Me Signed In</label>
                                                            </div>
                                                            {{-- <div class="pull-right">
                                                                <a href="#">Forgot Password?</a>
                                                            </div> --}}
                                                            <div class="pull-right">
                                                                <button class="btn btn-warning" type="submit">Login</button>
                                                            </div>
                                                            {{-- <div class="mrg-top-20 text-right">
                                                                <button class="btn btn-info" type="submit">Login</button>
                                                            </div> --}}
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
