@extends('front.layout.app')
@section('news')
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        p {
            text-decoration: none;
            color: black;
            font-size: 13px;
            padding: 7px 6px 9px 6px;
            background: #d5d5d5;
            margin-top: 4px;
            border-radius: 5px;
            border-bottom: 1px solid #bbb;
            margin-inline: 15px;
        }

        .numberofcomment {
            position: absolute;
            bottom: 30%;
            left: 22px;
        }

        .numberoflike {
            position: absolute;
            bottom: 30%;
            left: 60px;
            cursor: pointer;
        }

        .addcomment {
            position: relative;
        }

        .addcomment button {
            position: absolute;
            left: 0px;
            top: 58%;
            border: none;
            border-bottom-left-radius: 5px;
        }

        .fa-heart {
            color: red;
        }

        .comment {
            position: relative;
        }

        .comment::before {
            content: "";
            width: 0px;
            height: 0px;
            border: 10px solid #d5d5d5;
            border-bottom-color: transparent;
            border-top-color: transparent;
            border-right-color: transparent;
            position: absolute;
            right: -2px;
            top: 56%;
            transform: rotate(10deg);
        }
    </style>

    <main>
        <div class="homepage">
            <div class="container" style="max-width:1000px; !important;">

                <div class="row">

                    <!-- هشتاج -->
                    <div class="col-md-3">
                        <div class="hashtagCon overflow-auto" style="height: 500px;">
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

                    <div class="col-md-6" id="post-data">
                        <div class="greyBorder"></div>
                        <div class="homeTitle">أخر الأخبار
                        </div>
                        {{-- This is posts --}}
                        <div class="newsHomePage wow fadeInDown" data-wow-duration="1.4s">
                            <div class="row">
                                <a href="categoryNews/0.html">
                                    <div class="col-6">
                                        <div class="clean">
                                            Donate Quran
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="profieInfo">
                                <a href="shownews/314.html">
                                    <div class="imgCon">
                                        <img src="{{ asset('frontCSS/front/images/image.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="infos">
                                    <div class="date">منذ 4 أيام
                                    </div>

                                    <div class="name">
                                        <a style="color: #ff1e1e !important;font-size:24px;" href="shownews/314.html">افضل
                                            تبرع وصدقة جارية لحفظ كتاب الله تبرع الآن -
                                            Donate Quran</a>
                                        <div class="offecial">
                                            <img src="{{ asset('frontCSS/front/images/check.svg') }}" alt="" />
                                            رسمي
                                        </div>
                                    </div>

                                    <div class="name" style="color:#0d6efd;font-size:12px;">
                                        كتب: <a href="author-news/1.html">موقع جنوب</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newsdes">
                                <a href="shownews/314.html" style="text-decoration: none">صدقة جارية لدعم تعليم وتحفيظ
                                    القران
                                    Ongoing charity to support teaching and memorizing the Qur’an
                                    You can help lots of people by donating little​ -
                                    Link below</a>
                            </div>

                            <a style="text-decoration: none;" href="shownews/314.html">
                                <img src="{{ asset('frontCSS/images/news/1673847005.jpg') }}" alt=""
                                    class="bigNewsImg" />

                            </a>

                            <a class="hashTag" href="hashtag-news/55.html">
                                #quran
                            </a>
                            <a class="hashTag" href="hashtag-news/56.html">
                                #study
                            </a>



                            <div class="row">
                                <div class="col-md-3">
                                    <div class="numberofcomment">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        0
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="numberoflike">
                                        <i class="fa-regular fa-heart" onclick="changeLikeIcon()"></i>
                                        0
                                    </div>
                                </div>
                            </div>



                            <div class="addcomment">
                                <textarea type="text" name="" id="" class="form-control my-3 commentInput"
                                    style="min-height: 100%;max-height:500%" placeholder="اكتب تعليقا"></textarea>
                                <button>
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>

                            <div class="comment my-3">
                                <div class="commentBody">
                                    <p>
                                        السلام عليكم اخى الكريم احب ان اخبرك بانك مطلوب الى التحقيق من قبل عداله السماء
                                        ههههههههه</p>
                                </div>
                            </div>
                            <div class="comment my-3">
                                <div class="commentBody">
                                    <p>
                                        السلام عليكم اخى الكريم احب ان اخبرك بانك مطلوب الى التحقيق من قبل عداله السماء
                                        ههههههههه</p>
                                </div>
                            </div>


                            <div class="greyBorder"></div>
                        </div>
                        <div class="newsHomePage wow fadeInDown" data-wow-duration="1.4s">
                            <div class="row">
                                <a href="categoryNews/0.html">
                                    <div class="col-6">
                                        <div class="clean">
                                            Donate Quran
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="profieInfo">
                                <a href="shownews/314.html">
                                    <div class="imgCon">
                                        <img src="{{ asset('frontCSS/front/images/image.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="infos">
                                    <div class="date">منذ 4 أيام
                                    </div>

                                    <div class="name">
                                        <a style="color: #ff1e1e !important;font-size:24px;" href="shownews/314.html">افضل
                                            تبرع وصدقة جارية لحفظ كتاب الله تبرع الآن -
                                            Donate Quran</a>
                                        <div class="offecial">
                                            <img src="{{ asset('frontCSS/front/images/check.svg') }}" alt="" />
                                            رسمي
                                        </div>
                                    </div>

                                    <div class="name" style="color:#0d6efd;font-size:12px;">
                                        كتب: <a href="author-news/1.html">موقع جنوب</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newsdes">
                                <a href="shownews/314.html" style="text-decoration: none">صدقة جارية لدعم تعليم وتحفيظ
                                    القران
                                    Ongoing charity to support teaching and memorizing the Qur’an
                                    You can help lots of people by donating little​ -
                                    Link below</a>
                            </div>

                            <a style="text-decoration: none;" href="shownews/314.html">
                                <img src="{{ asset('frontCSS/images/news/1673847005.jpg') }}" alt=""
                                    class="bigNewsImg" />

                            </a>

                            <a class="hashTag" href="hashtag-news/55.html">
                                #quran
                            </a>
                            <a class="hashTag" href="hashtag-news/56.html">
                                #study
                            </a>



                            <div class="row">
                                <div class="col-md-3">
                                    <div class="numberofcomment">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        0
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="numberoflike">
                                        <i class="fa-regular fa-heart" onclick="changeLikeIcon()"></i>
                                        0
                                    </div>
                                </div>
                            </div>



                            <div class="addcomment">
                                <textarea type="text" name="" id="" class="form-control my-3 commentInput"
                                    style="min-height: 100%;max-height:500%" placeholder="اكتب تعليقا"></textarea>
                                <button>
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>

                            <div class="comment my-3">
                                <div class="commentBody">
                                    <p>
                                        السلام عليكم اخى الكريم احب ان اخبرك بانك مطلوب الى التحقيق من قبل عداله السماء
                                        ههههههههه</p>
                                </div>
                            </div>
                            <div class="comment my-3">
                                <div class="commentBody">
                                    <p>
                                        السلام عليكم اخى الكريم احب ان اخبرك بانك مطلوب الى التحقيق من قبل عداله السماء
                                        ههههههههه</p>
                                </div>
                            </div>


                            <div class="greyBorder"></div>
                        </div>
                        {{-- This is posts --}}
                    </div>



                </div>
            </div>
        </div>

    </main>
    <script>
        let like = document.querySelector('.fa-heart'),
            likes = document.querySelector('.likes');

        function changeLikeIcon() {
            like.classList.toggle('fa-solid');
        }
    </script>
@endsection
