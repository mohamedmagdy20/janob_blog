<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="container-width w-30  d-flex justify-content-between ">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontCSS/images/front/logo.jpg') }}"
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



                </div>
            </div>
        </div>
    </nav>
</header>
