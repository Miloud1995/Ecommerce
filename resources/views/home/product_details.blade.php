<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <base href="{{ url('/public') }}">
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

        {{-- -----------------------------------------------product details-------------------------------------------------- --}}



        <div style="width:80%; margin:auto;">
            <div style="display: flex;justify-content: space-between">
                <div class="" style="padding: 40px">
                    <h1 style="color: gray;font-weight: 900;text-decoration: underline">{{ $products->title }}</h1>
                    <p style="font-size:22px ">{{ $products->description }}</p>
                    <h2 style="color: green">${{ $products->price }}</h2>
                    <h2>{{ $products->category }}</h2>
                    <form action="{{ route('add_cart', ['id' => $products->id]) }}" method="POST">
                        @csrf

                        <a class="btn btn-primary" type="submit">Add To Cart</a>
                    </form>
                </div>
                <div>
                    <img src="/product/{{ $products->image }}" style="border-radius:12px;" alt="">
                </div>

            </div>

        </div>



        {{-- -----------------------------------------------product details-------------------------------------------------- --}}

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
