<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="images/header/fav.png" rel="shortcut icon" type="image/x-icon" />
	<title> @yield('title') </title>

	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('css/svg.css')}}" rel="stylesheet">

	<link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="../../../../use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" href="{{asset('css/portfolio.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/owlslider.css')}}" type="text/css">

	<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
</head>

<body id="page-top">
	<nav class="navbar navbar-expand-md navbar-light sticky-top nav-menu">
		<div class="row full-width">
			@include('includes.header')
		</div>
	</nav>
	<div class="full-width">
		<div id="wrapper">

			<ul class="sidebar navbar-nav">
                @include('includes.menu')
            </ul>

			<div id="content-wrapper">
				<div class="container-fluid pb-0">
                    @yield('contenu')
				</div>
			</div>

		</div>
	</div>


	<footer class="sticky-footer">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<div class="footer-info">
					<a href="#">About </a> |
					<a href="#">Faq’s </a> |
					<a href="#">Privacy</a> |
					<a href="#"> Advertise</a> |
					<a href="#">Term & Conditions </a> |
					<a href="#">Sitemap </a>|
					<a href="#">Tags </a>|
					<a href="#">Blog</a>
				</div>
				<div class="copy-right">
					© Copyright 2019 by Gambol. All Rights Reserved.
				</div>
			</div>
		</div>
	</footer>

	<a class="scroll-to-top rounded" href="#page-top">
		<i class="ti-arrow-up"></i>
	</a>

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('vendor_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<script src="{{asset('vendor_asset/jquery-easing/jquery.easing.min.js')}}"></script>

	<script src="{{asset('js/sb-admin.min.js')}}"></script>
	<script src="{{asset('js/portfolio.js')}}"></script>
	<script src="{{asset('js/you-listing.js')}}"></script>
	<script src="{{asset('js/menurght.js')}}"></script>
	<script src="{{asset('js/crausal1.js')}}"></script>

	<script src="{{asset('js/slick.min.js')}}"></script>

	<script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
	<script src="{{asset('assets/owlcarousel/owl.carousel.js')}}"></script>
	<script src="{{asset('assets/vendors/highlight.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
	<script>
		window.oncontextmenu = function () {
			return false;
		}
		$(document).keydown(function (event) {
			if (event.keyCode == 123) {
				return false;
			} else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey &&
					event.keyCode == 74)) {
				return false;
			}
		});
	</script>

</body>


</html>
