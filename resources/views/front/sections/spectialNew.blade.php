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

    .row {
        position: relative;
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

    .share {
        position: absolute;
        bottom: 30%;
        left: 105px;
        cursor: pointer;
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
 
    {{-- Posts Only --}}
    <div class="col-md-6" id="post-data">
        <div class="greyBorder"></div>

        {{-- This is posts --}}
        <div class="newsHomePage wow" data-wow-duration="1.4s">
            <div class="printed">
                <div class="row">
                    <div class="col-md-9">
                        <a href="categoryNews/0.html">
                            <div class="col-6">
                                {{-- <div class="clean">
                                    {{ $blog->type }}
                                </div> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 printBtn" onclick="print()" style="cursor: pointer">
                        <span>Print Blog</span>
                        <i class="fa-solid fa-print"></i>

                    </div>


                </div>
                <div class="profieInfo">
                    <a href="shownews/314.html">
                        <div class="imgCon">
                            <img src="{{ asset('profile/' . Auth::user()->img) }}" alt="" />
                        </div>
                    </a>
                    <div class="infos">
                        <div class="date">{{ $blog->updated_at->format('Y-m-d  H:i:s') }}
                        </div>

                        <div class="name">
                            <a style="color: #ff1e1e !important;font-size:24px;" href="shownews/314.html">
                                {{ $blog->title }}</a>
                            <div class="offecial">
                                <img src="{{ asset('blog-img/' . $blog->img) }}" alt="" />
                                رسمي
                            </div>


                        </div>

                        <div class="name" style="color:#0d6efd;font-size:12px;">
                            كتب: <a href="author-news/1.html">{{ Auth::user()->name }}</a>
                        </div>
                    </div>
                </div>
                <div class="newsdes">
                    <a href="shownews/314.html" style="text-decoration: none">{{ $blog->body }}</a>
                </div>

                <a style="text-decoration: none;" href="{{ asset('blog-img/' . $blog->img) }}">
                    <img src="{{ asset('blog-img/' . $blog->img) }}" alt="" class="bigNewsImg" />
                </a>

                @if ($blog->file != null)
                    <a style="text-decoration: none;" href="{{ asset('blog-file/' . $blog->file) }}">
                        <iframe src="{{ asset('blog-file/' . $blog->file) }}" class="bigNewsImg"></iframe>
                    </a>
                @endif


                <a class="hashTag" href="hashtag-news/55.html">
                    #{{ $blog->type }}
                </a>



                <div class="row">
                    <div class="col-md-3">
                        <div class="numberofcomment">
                            <i class="fa-solid fa-comment-dots"></i>
                            {{ count($blog->comment) }}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="numberoflike">
                            <i class="fa-regular fa-heart" id="like-icon-{{ $blog->id }}"
                                onclick="Bloglike({{ $blog->id }});"></i>
                            <span id="like-count-{{ $blog->id }}">{{ $blog->likes }}</span>
                        </div>
                    </div>
                    {{-- Share Button --}}
                    <div class="col-md-3">
                        <div class="share">
                            <i class="fa-solid fa-share" id="share-icon-{{ $blog->id }}""></i>
                        </div>
                    </div>
                </div>
            </div>



            <div class="addcomment">
                <form action="{{ route('comment.store', $blog->id) }}" method="POST">
                    @csrf
                    <textarea type="text" name="comment" id="" class="form-control my-3 commentInput"
                        style="min-height: 100%;max-height:500%" placeholder="اكتب تعليقا"></textarea>
                    <button>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>

            </div>
            <div class="comments">
                @foreach ($blog->comment as $comment)
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
        {{-- This is posts --}}
    </div>
@endsection
