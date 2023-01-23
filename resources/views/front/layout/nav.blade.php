<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="container-width w-30  d-flex justify-content-between ">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontCSS/images/front/logo.svg') }}"
                        alt="" class="logo" /></a>

                {{-- <a class="nav-moblie"
                    href="https://www.facebook.com/v3.3/dialog/oauth?client_id=440426970910431&amp;redirect_uri=https%3A%2F%2Fjanoob.net%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=A3RccBMshdttTACcSHaIJMq9ByZmqC0xF1jk9PBK"
                    style="margin-right:20px;">
                    <button class="btn btn-dark">أضف خبر</button>
                </a> --}}
                <div class="mx-3 my-2" style="color: white;" id="">
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="icons-navbar collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <form action="{{ route('home') }}" method="GET">
                        <div class="search-bar" style="position: relative">
                            <i class="fa-solid fa-magnifying-glass"
                                style="transform: rotate(90deg);position: absolute;left:5px;top:25%;color:#888;cursor: pointer;"></i>
                            <input type="text" name="search" id="" class="form-control w-100"
                                placeholder="ابحث" style="padding-left:27px">
                        </div>

                    </form>

                    <a class="nav-link nav-moblie active" href="/"><i class="fa-solid fa-house"></i></a>
                    <a class="nav-link nav-moblie  " href="{{ route('contact') }}"><i
                            class="fa-solid fa-phone-flip"></i></a>

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-gear"></i></a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <div class="joinCard text-center">
                                <img class="joinImg" src="images/front/Group%2010943.jpg" alt="" />
                                <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=440426970910431&amp;redirect_uri=https%3A%2F%2Fjanoob.net%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=umS7ZDNwpsOe5e8rxPkbk2UCHGQRcCCsi9jJPdGe"
                                    class="joinLink"><img src="front/images/facebook-1.svg" alt="" />أنضم الينا
                                </a>
                            </div>
                            <li class="nav">
                                <a class="dropdown-item" href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li class="nav">
                                <a class="dropdown-item" href="{{ route('contact') }}">الدليل التفاعلي</a>
                            </li>
                            <li class="nav">
                                <a class="dropdown-item" href="calendar-news.html">الروزنامة</a>
                            </li>
                            <li class="nav">
                                <a class="dropdown-item" href="weather.html">الطقس</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('contact') }}">اتصل بنا </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('contact') }}">الدعم الفني
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="privacy-policy.html">سياسة الخصوصية </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="terms-of-use.html">شروط الاستخدام</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="https://www.facebook.com/v3.3/dialog/oauth?client_id=440426970910431&amp;redirect_uri=https%3A%2F%2Fjanoob.net%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=thGD4EbVI6ko9XcJwN37ng1iMNoyXRG0CTNsAfJB">تزويدنا
                                    بالأخبار </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </nav>
</header>
