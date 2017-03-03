<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('pg-name')</title>
    <link href="main/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="main/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="main/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="main/css/creative.min.css" rel="stylesheet">
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
    @include('main-layout.nav')
    @yield('content')
    @include('main-layout.footer')
    <script src="main/vendor/jquery/jquery.min.js"></script>
    <script src="main/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="main/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="main/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="main/js/creative.min.js"></script>
</body>
</html>
