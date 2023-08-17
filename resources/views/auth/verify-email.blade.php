<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="images/header/fav.png" rel="shortcut icon" type="image/x-icon" />
    <title>Youlisting | Sign In </title>

    <link href="{{asset('vendor_asset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owlslider.css')}}" type="text/css">

    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
</head>

<body>
    <div class="sign">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="bg-form">
                        <div class="sinheader">
                            <div class="col-md-6 col-sm-12">
                                <a href="index_1.html"><img src="{{asset('images/header/logo.svg')}}" alt=""></a>
                            </div>
                            <div class="sings col-md-6 col-sm-12">
                                <a href="{{ route('register') }}">Créer un compte</a>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="sform">
                                <h1>{{ __('Vérification de l\'adresse email') }}</h1>
                                <span>Bienvenue! Veuillez vous connecter</span>
                                <div class="row justify-content-md-center">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="card-body">
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('Un lien de vérification sera envoyé dans votre boîte mail.') }}
                                                </div>
                                            @endif

                                            {{ __('Avant de continuer, veuillez consulter votre boîte mail pour la vérification.') }}
                                            {{ __('Si vous n\'avez pas reçu de mail de vérification') }},
                                            <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en recevoir de nouveau') }}</button>.
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-sign">
                            <div class="p-left col-md-8 footermenu">
                                <ul>
                                    <li><a href="#">About </a></li>
                                    <li><a href="#">Faq’s</a></li>
                                    <li><a href="#"> Privacy policy</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">career</a></li>
                                    <li><a href="#">Term and conditions </a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Tags</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                            <div class="p-left col-md-4 copyrightsign">
                                © Copyright 2019 by <a href="#">Gambol.</a> All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('vendor_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('vendor_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script>
        window.oncontextmenu = function () {
            return false;
        }
        $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                return false;
            } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event
                    .shiftKey && event.keyCode == 74)) {
                return false;
            }
        });

    </script>
</body>

</html>
