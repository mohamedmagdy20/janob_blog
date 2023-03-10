@extends('front.layout.app', ['timenow', $timenow, 'socials' => $socials])
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

        .newsHomePage {
            box-shadow: 1px 1px 10px #CCC;
            border-radius: 10px;
        }

        .numberofcomment {
            position: absolute;
            bottom: 30%;
            left: 22px;
        }

        .share {
            position: absolute;
            bottom: 30%;
            left: 105px;
        }

        .comment-icon:hover {
            cursor: pointer;
            color: #0d6efd;
            transition: ease-in-out 0.2s
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

        .row {
            position: relative;
        }

        .comments {
            /* max-height: 170.6px; */
            height: 0;
            overflow: scroll;
            transition: 0.5s ease-in-out;
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

        .poll .answers {
            padding: 20px 20px 10px;
            z-index: 1;
        }

        .poll .answers .answer {
            position: relative;
            width: 100%;
            height: 40px;
            padding: 0 10px;
            line-height: 40px;
            color: #111;
            margin-bottom: 10px;
            border: 1px solid #d4d4d4;
            border-radius: 10px;
            cursor: pointer;
            overflow: hidden;
        }

        .poll .answers .answer .answerText {
            position: relative;
            z-index: 1;
        }

        .poll .answers .answer.selected {
            border: 2px solid #8f9fe8;
        }

        .poll .answers .answer span.percentage-value {
            position: absolute;
            top: 50%;
            left: 0px;
            width: 40px;
            transform: translateY(-50%);
            color: #111;
            font-weight: 15px;
        }

        .poll .answers .answer span.percentage-bar {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 0%;
            height: 100%;
            background-color: #ccd8f1;
            transition: width 300ms ease-in-out;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .printed * {
                visibility: visible;
            }

        }
    </style>


    <div class="col-md-6" id="post-data">
        <div class="greyBorder"></div>
        <div class="homeTitle">?????? ????????
        </div>
        @if ($fixed_blog)
            <div class="newsHomePage wow printBtn" data-wow-duration="1.4s" id="page-{{ $fixed_blog->id }}">
                <div class="printed">
                    <div class="row">
                    </div>
                    <div class="profieInfo">
                        <a href="{{ asset('profile/' . $user->img) }}">
                            <div class="imgCon">
                                <img src="{{ asset('profile/' . $user->img) }}" alt="" />
                            </div>
                        </a>
                        <div class="infos">
                            <div class="date">{{ $fixed_blog->updated_at->format('Y-m-d | H:i:s') }}
                            </div>

                            <div class="name">
                                <a style="color: #ff1e1e !important;font-size:24px; text-decoration:none"
                                    href="{{ route('specialNew', $fixed_blog->id) }}">
                                    {{ $fixed_blog->title }}</a>
                                {{-- <div class="offecial">
                                <img src="{{ asset('blog-img/' . $fixed_blog->img) }}" alt="" />
                                ????????
                            </div> --}}
                            </div>

                            <div class="name" style="color:#0d6efd;font-size:12px;">
                                ??????: {{ $user->name }}
                            </div>
                        </div>

                    </div>
                    <div class="newsdes">
                        <a href="{{ route('specialNew', $fixed_blog->id) }}"
                            style="text-decoration: none">{{ $fixed_blog->body }}</a>
                    </div>

                    <a style="text-decoration: none;" href="{{ route('specialNew', $fixed_blog->id) }}">
                        <img src="{{ asset('blog-img/' . $fixed_blog->images[0]->img) }}" alt=""
                            class="bigNewsImg" />

                    </a>

                    </a>

                    <a class="hashTag" href="hashtag-news/55.html">
                        {{ $fixed_blog->type }}
                    </a>




                    <div class="row">
                        <div class="col-md-3">
                            <div class="numberofcomment">
                                <i class="fa-solid fa-comment comment-icon"
                                    onclick="showComments({{ $fixed_blog->id }})"></i>
                                {{ count($fixed_blog->comment) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="numberoflike">
                            <i class="fa-regular fa-heart" id="fixed-like"
                                onclick="BloglikeFixed({{ $fixed_blog->id }});"></i>
                            <span id="fixed-like-count">{{ $fixed_blog->likes }}</span>
                        </div>
                        {{-- Share Button --}}
                        <div class="col-md-3">
                            <div class="share">
                                {{-- <i class="fa-solid fa-share" id="share-icon-{{ $list->id }}""></i> --}}
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-share"
                                            id="share-icon-{{ $fixed_blog->id }}"></i></a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding:10px;">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://app.janoob.net/show/{{ $fixed_blog->id }}"
                                            style="text-decoration: none" target="_blank">
                                            <li style="curor:pointer ;color:rgb(56, 64, 187);">
                                                <span>FaceBook</span>
                                                <i class="fa-brands fa-facebook"></i>
                                            </li>
                                        </a>
                                        <a href="https://twitter.com/share?url=http://app.janoob.net/show/{{ $fixed_blog->id }}"
                                            target="_blank" style="text-decoration: none;color:black">
                                            <li style="curor:pointer ;color:#4285f4;">
                                                <span>Twitter</span>
                                                {{-- <i class="fa-brands fa-twitter"></i> --}}
                                                <i class="fa-brands fa-square-twitter"></i>
                                            </li>
                                        </a>
                                        <a href="https://tiktok.com/share?url=http://app.janoob.net/show/{{ $fixed_blog->id }}"
                                            target="_blank" style="text-decoration: none;color:black">
                                            <li style="curor:pointer ;">
                                                <span>Tiktok</span>
                                                <i class="fa-brands fa-tiktok"></i>
                                            </li>
                                        </a>
                                        <a href="https://youtube.com/share?url=http://app.janoob.net/show/{{ $fixed_blog->id }}"
                                            target="_blank" style="text-decoration: none;color:black">
                                            <li style="curor:pointer ;color:red">
                                                <span>Youtube</span>
                                                <i class="fa-brands fa-youtube"></i>
                                            </li>
                                        </a>
                                        <a href="whatsapp://send?text=http://app.janoob.net/show/{{ $fixed_blog->id }}"
                                            data-action="share/whatsapp/share" target="_blank"
                                            style="text-decoration: none;color:black">
                                            <li style="curor:pointer ;color:rgb(20, 166, 20)">
                                                <span>Whatsapp</span>
                                                <i class="fa-brands fa-square-whatsapp"></i>
                                            </li>
                                        </a>
                                        <button style="border:none;margin-top:5px" onclick="copy({{ $fixed_blog->id }})">
                                            <li style="curor:pointer ;color:#777">
                                                <span>Get Link</span>
                                                <i class="fa-solid fa-link"></i>
                                                <input type="text" name="blogLink" id="blogLink-{{ $fixed_blog->id }}"
                                                    value="https://app.jnoob.net/news/{{ $fixed_blog->id }}">
                                            </li>
                                        </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="addcomment">
                    <form action="{{ route('comment.store', $fixed_blog->id) }}" method="POST">
                        @csrf
                        <textarea type="text" name="comment" id="" class="form-control my-3 commentInput"
                            style="min-height: 100%;max-height:500%" placeholder="???????? ????????????" onfocus="showComments({{ $fixed_blog->id }})"></textarea>
                        <button id="commentBtn-{{ $fixed_blog->id }}" onclick="showComments({{ $fixed_blog->id }})">
                            <i class="fa-solid fa-paper-plane" style="font-size: 20px;"></i>
                        </button>
                    </form>

                </div>

                <div class="comments" id="comment-{{ $fixed_blog->id }}">
                    @foreach ($fixed_blog->comment as $comment)
                        <div class="comment my-3">
                            <div class="commentBody">
                                <p>
                                    {{ $comment->body }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>


                <div class="greyBorder"></div>
            </div>
        @endif
        <div class="greyBorder"></div>
        <nav class="navbar bg-light my-3">
            <div class="container-fluid">
                <form class="d-flex w-100" role="search">
                    <input class="form-control me-2" type="search" placeholder="???????? ???? ??????????" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">??????</button>
                </form>
            </div>
        </nav>
        <div class="greyBorder"></div>
        <div class="homeTitle">?????? ??????????????
        </div>
        {{-- This is posts --}}
        @foreach ($lists as $index => $list)
            @if ($list->rec == '1')
                <div class="newsHomePage wow printBtn" data-wow-duration="1.4s" id="page-{{ $list->id }}">
                    <div class="printed">
                        <div class="row">


                        </div>

                        <div class="profieInfo">
                            <a href="{{ asset('profile/' . $user->img) }}">
                                <div class="imgCon">
                                    <img src="{{ asset('profile/' . $user->img) }}" alt="" />
                                </div>
                            </a>
                            <div class="infos">
                                <div class="date">{{ $list->updated_at->format('Y-m-d | H:i:s') }}
                                </div>

                                <div class="name">
                                    <a style="color: #ff1e1e !important;font-size:24px;text-decoration:none"
                                        href="{{ route('specialNew', $list->id) }}">
                                        {{ $list->title }}</a>
                                    {{-- <div class="offecial">
                                        <img src="{{ asset('blog-img/' . $list->img) }}" alt="" />
                                        ????????
                                    </div> --}}
                                </div>

                                <div class="name" style="color:#0d6efd;font-size:12px;">
                                    ??????: {{ $user->name }}
                                </div>
                            </div>

                        </div>
                        <div class="newsdes">
                            <a href="{{ route('specialNew', $list->id) }}"
                                style="text-decoration: none">{{ $list->body }}</a>
                        </div>

                        <a style="text-decoration: none;" href="{{ route('specialNew', $list->id) }}">
                            {{-- <img src="{{ asset('blog-img/' . $list->img) }}" alt="" class="bigNewsImg" /> --}}
                            <img src="{{ asset('blog-img/' . $list->images[0]->img) }}" alt=""
                                class="bigNewsImg" />

                        </a>

                        <a class="hashTag" href="hashtag-news/55.html">
                            #{{ $list->type }}
                        </a>




                        <div class="row">
                            <div class="col-md-3">
                                <div class="numberofcomment">
                                    <i class="fa-solid fa-comment comment-icon"
                                        onclick="showComments({{ $list->id }})"></i>
                                    {{ count($list->comment) }}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="numberoflike">
                                    <i class="fa-regular fa-heart" id="like-icon-{{ $list->id }}"
                                        onclick="Bloglike({{ $list->id }});"></i>
                                    <span id="like-count-{{ $list->id }}">{{ $list->likes }}</span>
                                </div>
                            </div>
                            {{-- Share Button --}}
                            <div class="col-md-3">
                                <div class="share">
                                    {{-- <i class="fa-solid fa-share" id="share-icon-{{ $list->id }}""></i> --}}
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-share" id="share-icon-{{ $list->id }}"></i></a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                            style="padding:10px;">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://app.janoob.net/show/{{ $list->id }}"
                                                style="text-decoration: none" target="_blank">
                                                <li style="curor:pointer ;color:rgb(56, 64, 187);">
                                                    <span>FaceBook</span>
                                                    <i class="fa-brands fa-facebook"></i>
                                                </li>
                                            </a>
                                            <a href="https://twitter.com/share?url=http://app.janoob.net/show/{{ $list->id }}"
                                                target="_blank" style="text-decoration: none;color:black">
                                                <li style="curor:pointer ;color:#4285f4;">
                                                    <span>Twitter</span>
                                                    {{-- <i class="fa-brands fa-twitter"></i> --}}
                                                    <i class="fa-brands fa-square-twitter"></i>
                                                </li>
                                            </a>
                                            <a href="https://tiktok.com/share?url=http://app.janoob.net/show/{{ $list->id }}"
                                                target="_blank" style="text-decoration: none;color:black">
                                                <li style="curor:pointer ;">
                                                    <span>Tiktok</span>
                                                    <i class="fa-brands fa-tiktok"></i>
                                                </li>
                                            </a>
                                            <a href="https://youtube.com/share?url=http://app.janoob.net/show/{{ $list->id }}"
                                                target="_blank" style="text-decoration: none;color:black">
                                                <li style="curor:pointer ;color:red">
                                                    <span>Youtube</span>
                                                    <i class="fa-brands fa-youtube"></i>
                                                </li>
                                            </a>
                                            <a href="whatsapp://send?text=http://app.janoob.net/show/{{ $list->id }}"
                                                data-action="share/whatsapp/share" target="_blank"
                                                style="text-decoration: none;color:black">
                                                <li style="curor:pointer ;color:rgb(20, 166, 20)">
                                                    <span>Whatsapp</span>
                                                    <i class="fa-brands fa-square-whatsapp"></i>
                                                </li>
                                            </a>
                                            <button style="border:none;margin-top:5px"
                                                onclick="copy({{ $list->id }})">
                                                <li style="curor:pointer ;color:#777">
                                                    <span>Get Link</span>
                                                    <i class="fa-solid fa-link"></i>
                                                    <input type="text" name="blogLink"
                                                        id="blogLink-{{ $list->id }}"
                                                        value="https://app.jnoob.net/news/{{ $list->id }}">
                                                </li>
                                            </button>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="addcomment">
                        <form action="{{ route('comment.store', $list->id) }}" method="POST">
                            @csrf
                            <textarea type="text" name="comment" id="" class="form-control my-3 commentInput"
                                style="min-height: 100%;max-height:500%" placeholder="???????? ????????????" onfocus="showComments({{ $list->id }})"></textarea>
                            <button id="commentBtn-{{ $list->id }}" onclick="showComments({{ $list->id }})">
                                <i class="fa-solid fa-paper-plane" style="font-size: 20px;"></i>
                            </button>
                        </form>
                    </div>

                    <div class="comments" id="comment-{{ $list->id }}">
                        @foreach ($list->comment as $comment)
                            <div class="comment my-3">
                                <div class="commentBody">
                                    <p>
                                        {{ $comment->body }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="greyBorder"></div>
                </div>
            @elseif ($list->rec == '2')
                <div class="newsHomePage wow" data-wow-duration="1.4s">
                    <div class="row">
                        {{-- <a href="{{ route('specialNew', 1) }}">
                            <div class="col-6">
                                <div class="clean">
                                    ??????????
                                </div>
                            </div>
                        </a> --}}
                    </div>
                    <div class="profieInfo">
                        <a href="#">
                            <div class="imgCon">
                                <img src="{{ asset('profile/' . $user->img) }}" alt="" />
                            </div>
                        </a>
                        <div class="infos">
                            <div class="date">{{ $list->updated_at->format('Y-m-d | H:i:s') }}
                            </div>

                            <div class="name">
                                <a style="color: #ff1e1e !important;font-size:24px;">
                                    {{ $list->title }}</a>
                                <div class="offecial">
                                    {{-- @if ($list->img != null)
                                        <img src="{{ asset('blog-img/' . $list->img) }}" alt="" />
                                        ????????
                                    @else
                                    @endif --}}
                                </div>
                            </div>

                            <div class="name" style="color:#0d6efd;font-size:12px;">
                                ??????: {{ $user->name }}
                            </div>
                        </div>
                    </div>
                    <div class="newsdes">
                        <a href="{{ route('specialNew', 1) }}" style="text-decoration: none">{{ $list->body }}</a>
                    </div>

                    <a style="text-decoration: none;" href="{{ route('specialNew', 1) }}">
                        @if ($list->img != null)
                            <img src="{{ asset('ads/' . $list->img) }}" alt="" class="bigNewsImg" />
                        @else
                        @endif
                    </a>
                </div>
                <div class="greyBorder"></div>
            @elseif ($list->rec == '3')
                <div class="poll newsHomePage wow ">

                    <div class="question" style="border-bottom:1px solid rgb(194, 194, 194);padding-bottom:10px"
                        id="question-{{ $list->id }}">
                        {{ $list->title }}</div>
                    <div class="answers">
                        @foreach ($list->answer as $index => $answer)
                            <div class="answer" onclick="markAnswer({{ $answer->id }})"
                                id="answer-{{ $answer->id }}">
                                <div class="answerText">
                                    {{ $answer->body }}
                                </div>
                                <span class="percentage-bar" id="bar-{{ $answer->id }}"></span>
                                <span class="percentage-value"
                                    id="p-value-{{ $answer->id }}">{{ $answer->rate }}</span>
                            </div>
                        @endforeach

                    </div>

                </div>
            @endif
        @endforeach
    </div>
@endsection
@section('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Poll Function --}}
    <script>
        function markAnswer(id) {

            let rate = document.getElementById('p-value-' + id).innerHTML
            $.ajax({
                url: "rate/" + id,
                method: 'GET',
                data: {},
                success: function(result) {
                    rate++
                    document.getElementById('p-value-' + id).innerHTML = rate
                    console.log('success')
                },
                error: function(err) {
                    console.log(err);
                }


            });

            let bar = document.querySelector("#bar-" + id);
            bar.style.width = `${rate}%`;

        }
    </script>

    <script>
        function showComments(id) {
            let commentBody = document.querySelector('#comment-' + id);
            commentBody.style.height = "170.6px";
            console.log("Welcome");
        }

        function copy(id) {
            // let copyBtn = document.querySelector('#copyLinkBtn-' + id);
            let blogLink = document.querySelector('#blogLink-' + id);
            blogLink.select();
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
            // console.log(blogLink.value);
        }
    </script>
    <script>
        function BloglikeFixed(id) {
            // alert(id)
            let like = document.querySelector("#fixed-like")
            console.log(like)
            let star = document.getElementById("fixed-like-count").innerHTML
            console.log(star)
            // likes = document.querySelector('.likes');
            $.ajax({
                url: "like/" + id,
                method: 'GET',
                data: {},
                success: function(result) {
                    console.log('success')
                    like.classList.toggle('fa-solid');
                    // like.style.display = "none";
                    star++
                    document.getElementById('like-count-' + id++'-fixed').innerHTML = star
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>

    <script>
        function Bloglike(id) {
            let like = document.querySelector('#like-icon-' + id)
            console.log(like)
            let star = document.getElementById('like-count-' + id).innerHTML
            console.log(star)
            // likes = document.querySelector('.likes');
            $.ajax({
                url: "like/" + id,
                method: 'GET',
                data: {},
                success: function(result) {
                    console.log('success')
                    like.classList.toggle('fa-solid');
                    // like.style.display = "none";
                    star++
                    document.getElementById('like-count-' + id).innerHTML = star
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>
@endsection
