<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="Home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="Home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="Home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="Home/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.Header');
        <!-- end header section -->
        <!-- slider section -->
        @include('home.SliderSection');
        <!-- end slider section -->
    </div>
    <!-- why section -->
    @include('home.WhySection');
    <!-- end why section -->

    <!-- arrival section -->
    @include('home.ArrivalSection');
    <!-- end arrival section -->

    <!-- product section -->
    @include('home.ProductSection');
    <!-- end product section -->

    <!-- subscribe section -->
    @include('home.Subscribe');
    <!-- end subscribe section -->
    <!-- client section -->
    @include('home.Client');
    <!-- end client section -->
    <!-- footer start -->
    @include('home.Footer');
    <!-- footer end -->
    @include('home.Copyright');
    <!-- jQery -->
    <script src="Home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="Home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="Home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="Home/js/custom.js"></script>
</body>

</html>
