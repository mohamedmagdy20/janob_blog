<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="kLrGI3BuvqLARrJzaIIpHeZfFfDM3GtrdqmqS7gO">

    <title>الجنوب للاخبار</title>
    <link rel="stylesheet" href="{{ asset('frontCSS/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontCSS/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontCSS/front/css/animate.min.css') }}">
    <link rel="shortcut icon" type="image" href="{{ asset('frontCSS/images/front/smallLogo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Style The Dropdown Button */
        .dropbtn {
            background-color: #fff;
            color: black;
            padding: 16px;
            font-size: 30px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #fff;
        }
    </style>

    <script src="{{ asset('frontCSS/js/jquery.js') }}"></script>
    <script src="{{ asset('frontCSS/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontCSS/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontCSS/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontCSS/js/easing.min.js') }}"></script>
</head>

<body>
    @include('front.layout.nav')
    <div class="row" style="padding-top:50px">
        @yield('news')
    </div>

</body>

</html>
