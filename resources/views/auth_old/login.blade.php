<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 09:42:09 GMT -->
<head>
    <title>DonAvis Login</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    @section('content')
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
        
            <div class="card p-2 rounded-pill">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Se connecter</h3>
                    <!-- <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" action="{{ route('login') }}">
                    </div> -->
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <!-- <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                            <div class="input-group mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
                            <div class="input-group mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                            <div class="form-group text-left">
                                <div class="checkbox checkbox-fill d-inline">
                                    <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                    <label for="checkbox-fill-a1" class="cr">{{ __('Se rappeler de moi') }}</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary shadow-2 mb-4">
                                {{ __('Se connecter') }}
                            </button>
                            
                            @if (Route::has('password.request'))
                            <p class="mb-2 text-muted">Mot de pas oublié? <a href=" {{ route('password.request') }}">Réinitialiser</a></p>
                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> -->
                            @endif
                            <p class="mb-0 text-muted">N'avez-vous pas un compte? <a href="{{ route('register') }}">Créer un compte</a></p>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
