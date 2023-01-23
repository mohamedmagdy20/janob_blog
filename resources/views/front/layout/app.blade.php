<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="kLrGI3BuvqLARrJzaIIpHeZfFfDM3GtrdqmqS7gO">

    <title>الجنوب للاخبار</title>
    <link href="{{ asset('frontCSS/css/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontCSS/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontCSS/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontCSS/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontCSS/css/font-awesome.min.css') }}">

    <link rel="shortcut icon" type="image" href="{{ asset('frontCSS/images/front/smallLogo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: #EEE;
        }

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


    <script src="{{ asset('frontCSS/js/wow.js') }}"></script>

    <script async src="../pagead2.googlesyndication.com/pagead/js/fdf1e.txt?client=ca-pub-9047311544579993"
        crossorigin="anonymous"></script>


    <script src="{{ asset('frontCSS/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontCSS/js/jquery.jscroll.min.js') }}"></script>


    <div id="fb-root"></div>

    <script async defer crossorigin="anonymous"
        src="../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=277906530799089&autoLogAppEvents=1"
        nonce="9sRDPsf9"></script>

    <script>
        $('a[href$="#Modal"]').on("click", function() {
            $('#Modal').modal('show');
        });
    </script>
    <script>
        new WOW().init();
    </script>


    <style>
        .back-to-top {
            position: fixed;
            display: none;
            background: var(--primary);
            color: #fff;
            width: 44px;
            height: 44px;
            text-align: center;
            line-height: 1;
            font-size: 16px;
            border-radius: 50%;
            right: 15px;
            bottom: 15px;
            z-index: 11;
            padding-top: 12px;
            color: #fff;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PLLVZZR');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body onload="startTime()">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLLVZZR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            var x1 = today.getDate() + "/" + today.getMonth() + 1 + "/" + today.getFullYear();
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s + ' ' + x1;
            setTimeout(startTime, 1000);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
    @include('front.layout.nav')
    <main>
        <div class="homepage">
            <div class="container" style="max-width:1000px; !important;">
                <div class="row" style="padding-top:50px">
                    <!-- هشتاج -->
                    <div class="col-md-3">
                        <div class="hashtagCon overflow-auto"
                            style="height: 500px;box-shadow: 1px 1px 10px #CCC;
                        border-radius: 10px;">
                            <div class="title">هاشتاغ</div>
                            <div class="hashtagName">
                                <a style="color: #ff1e1e !important;font-size:14px;" href="hashtag-news/55.html">
                                    quran
                                </a>
                            </div>
                            <div class="reporNum">1 تقرير</div>
                            <div class="hashtagName">
                                <a style="color: #ff1e1e !important;font-size:14px;" href="hashtag-news/56.html">
                                    study
                                </a>
                            </div>
                            <div class="reporNum">1 تقرير</div>

                        </div>
                    </div>

                    @yield('news')
                </div>
            </div>
        </div>
    </main>
    <a href="#" class="back-to-top" style="background: #29aae3;">
        <i class="fa-solid fa-chevron-up"></i>
    </a>

    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>

    <script>
        if ("" == "" && "") {
            $(window).on("load", function() {
                AOS.init();
                $("#exampleModal").modal("show");
            });
        }
    </script>

    <script>
        $('a[href$="#offensive_news"]').on("click", function() {

            var id = document.getElementsByClassName("offensive")[0].id;
            $(".modal-body #news_id").val(id);
            $('#offensive_news').modal('show');

        });
    </script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>

    <script>
        // Back to top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
        });
    </script>

</body>

</html>
