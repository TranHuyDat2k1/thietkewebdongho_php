<!DOCTYPE HTML>
<html ng-app="myapp" ng-controller='customercontroller'>
<head>
<title>Trang Chủ </title>
<link href="../user/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="../user/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="../user/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="../user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../user/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="../user/js/menu_jquery.js"></script>
<script src="../user/js/simpleCart.min.js"> </script>
</head>
<body>
<!-- header -->
@include('include.header')

<!-- content -->
@yield('content')

		<!-- footer -->
        @include('include.footer')

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/assets/customer/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/customer/js/bootstrap.min.js"></script>
    <script src="/assets/customer/js/main.js"></script>
    
    <script src="/js/angular.min.js"></script>
    <script src="/js/customer.js"></script>
    <script src="/js/ui-bootstrap-tpls.min.js"></script>
</body>
</html>