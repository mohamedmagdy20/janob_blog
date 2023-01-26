<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="kLrGI3BuvqLARrJzaIIpHeZfFfDM3GtrdqmqS7gO">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords" content="news,new,الاخبار, الجنوب, فلسطين,موقع الجنوب">
    <meta name="author" content="Jnoob.com">
    <meta name="description" content="موقع الجنوب للاخبار الحصريه والعالميه">
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

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

    <script asyncsrc="{{ asset('frontCSS/js/fdf1e.txt?client=ca-pub-9047311544579993') }}" crossorigin="anonymous">
    </script>


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

    <script asyncsrc="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9047311544579993"
        crossorigin="anonymous"></script>

    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9047311544579993"
        crossorigin="anonymous"></script>
    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-e3-2b+81-nk+tw"
        data-ad-client="ca-pub-9047311544579993" data-ad-slot="4402961041"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script> --}}

    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9047311544579993"
        crossorigin="anonymous"></script>
    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-e3-2b+81-nk+tw"
        data-ad-client="ca-pub-9047311544579993" data-ad-slot="4402961041"></ins> --}}
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0&appId=924998495156283&autoLogAppEvents=1"
        nonce="ezMg9Lwk"></script>
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

                    <div class="col-md-3">
                        <amp-auto-ads type="adsense" data-ad-client="ca-pub-9047311544579993">
                        </amp-auto-ads>
                    </div>
                    @yield('news')
                    <div class="col-md-3">
                        {{-- <div class="fb-post" data-href="https://fb.watch/iheykI-NRs/" data-width="350" data-show-text="true"><blockquote cite="https://www.facebook.com/janoob.negev/videos/1919479461732922/" class="fb-xfbml-parse-ignore"><p>اللهم اجعل القران العظيم ربيع قلوبنا ونور صدورنا وجلاء أحزاننا وهمومنا ومغفره لذنوبنا</p>Posted by ‎<a href="https://www.facebook.com/janoob.negev/">Janoob موقع جنوب - النقب</a>‎ on&nbsp;<a href="https://www.facebook.com/janoob.negev/videos/1919479461732922/">Wednesday, 25 January 2023</a></blockquote></div>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjanoob.negev%2Fposts%2Fpfbid02E1WgS9WkDmmakxkiYWqFkbKVtqEc3mPDtKzpkgPoCsF2kbjVGbHT2nZRCoFVt6FUl&show_text=true&width=500" width="350" height="430" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjanoob.negev%2Fposts%2Fpfbid02bfD9vRTQcigKWHVCLie1pDtP4xTxeyEK3XrtvauABQrzvbxa3JhGQuWv5k38ekrDl&show_text=true&width=500" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> --}}
                        @foreach ($socials as $social )
                            {!! $social->link !!}
                        @endforeach
                    
                    </div>

                </div>
            </div>
        </div>
    </main>
    <a href="#" class="back-to-top" style="background: #29aae3;">
        <i class="fa-solid fa-chevron-up"></i>
    </a>
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    @yield('script')


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
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
</body>

</html>
