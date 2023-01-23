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

        .newsHomePage {
            box-shadow: 1px 1px 10px #CCC;
            border-radius: 10px;
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

        .comments {
            max-height: 170.6px;
            overflow: scroll;
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
    </style>


    <div class="col-md-6" id="post-data">
        <div class="greyBorder"></div>
        <div class="homeTitle">أخر الأخبار
        </div>
        {{-- This is posts --}}
     @foreach ($lists as  $index => $list )
        @if($list->rec == '1')
        <div class="newsHomePage wow fadeInDown" data-wow-duration="1.4s">
            <div class="row">
                <a href="{{ route('specialNew', 1) }}">
                    <div class="col-6">
                        <div class="clean">
                           {{$list->type}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="profieInfo">
                <a href="#">
                    <div class="imgCon">
                        <img src="{{ asset('profile/'.$user->img) }}" alt="" />
                    </div>
                </a>
                <div class="infos">
                    <div class="date">{{$list->updated_at->format('Y-m-d  H:i:s')}}
                    </div>

                    <div class="name">
                        <a style="color: #ff1e1e !important;font-size:24px;" href="{{ route('specialNew',$list->id) }}">افضل
                            {{$list->title}}</a>
                        <div class="offecial">
                            <img src="{{ asset('blog-img/'.$list->img) }}" alt="" />
                            رسمي
                        </div>
                    </div>

                    <div class="name" style="color:#0d6efd;font-size:12px;">
                        كتب: <a href="author-news/1.html">{{$user->name}}</a>
                    </div>
                </div>
            </div>
            <div class="newsdes">
                <a href="{{ route('specialNew', 1) }}" style="text-decoration: none">{{$list->body}}</a>
            </div>

            <a style="text-decoration: none;" href="{{ route('specialNew', 1) }}">
                <img src="{{ asset('blog-img/'.$list->img) }}" alt="" class="bigNewsImg" />

            </a>

            <a class="hashTag" href="hashtag-news/55.html">
                #{{$list->type}}
            </a>
            



            <div class="row">
                <div class="col-md-3">
                    <div class="numberofcomment">
                        <i class="fa-solid fa-comment-dots"></i>
                        {{count($list->comment)}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="numberoflike">
                        <i class="fa-regular fa-heart" id="like-icon-{{$list->id}}" onclick="Bloglike({{$list->id}});"></i>
                        <span id="like-count-{{$list->id}}">{{$list->likes}}</span> 
                    </div>
                </div>
            </div>



            <div class="addcomment">
                <form action="{{route('comment.store',$list->id)}}" method="POST">
                    @csrf
                    <textarea type="text" name="comment" id="" class="form-control my-3 commentInput"
                    style="min-height: 100%;max-height:500%" placeholder="اكتب تعليقا"></textarea>
                    <button>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
                
            </div>

            <div class="comments">
                @foreach ($list->comment as $comment )
                    <div class="comment my-3">
                        <div class="commentBody">
                            <p>
                                {{$comment->body}}
                            </p>
                        </div>
                    </div>     
                @endforeach
               
            </div>


            <div class="greyBorder"></div>
        </div>

        @elseif ($list->rec == '2')
        <div class="newsHomePage wow fadeInDown" data-wow-duration="1.4s">
            <div class="row">
                <a href="{{ route('specialNew', 1) }}">
                    <div class="col-6">
                        <div class="clean">
                            اعلان
                        </div>
                    </div>
                </a>
            </div>
            <div class="profieInfo">
                <a href="#">
                    <div class="imgCon">
                        <img src="{{ asset('profile/'.$user->img) }}" alt="" />
                    </div>
                </a>
                <div class="infos">
                    <div class="date">{{$list->updated_at->format('Y-m-d  H:i:s')}}
                    </div>

                    <div class="name">
                        <a style="color: #ff1e1e !important;font-size:24px;">
                            {{$list->title}}</a>
                        <div class="offecial">
                            @if($list->img != null)
                            <img src="{{ asset('blog-img/'.$list->img) }}" alt="" />
                            رسمي
                            @else
                            @endif
                        </div>
                    </div>

                    <div class="name" style="color:#0d6efd;font-size:12px;">
                        كتب: <a href="author-news/1.html">{{$user->name}}</a>
                    </div>
                </div>
            </div>
            <div class="newsdes">
                <a href="{{ route('specialNew', 1) }}" style="text-decoration: none">{{$list->body}}</a>
            </div>

            <a style="text-decoration: none;" href="{{ route('specialNew', 1) }}">
                @if($list->img != null)
                <img src="{{ asset('blog-img/'.$list->img) }}" alt="" />
                رسمي
                @else
                @endif
            </a>   
            </div>
            <div class="greyBorder"></div>

        @elseif ($list->rec == '3')

            <div class="poll newsHomePage wow fadeInDown">
                <div class="row">
                    <a href="{{ route('specialNew', 1) }}">
                        <div class="col-6">
                            <div class="clean">
                                Questions
                            </div>
                        </div>
                    </a>
                </div>
                <div class="question" style="border-bottom:1px solid rgb(194, 194, 194);padding-bottom:10px">{{$list->title}}</div>
                <div class="answers">
                    @foreach ( $list->answer as $index => $answer )
                    <div class="answer" onclick="markAnswer({{$answer->id}})">
                                 {{$answer->body}}
                                 <span class="percentage-bar"></span>
                                 <span class="percentage-value" id="p-value-{{$answer->id}}">{{$answer->rate}}</span>
                    </div>
                    @endforeach

                </div>

            </div>
        @endif
     @endforeach
    </div>

        
        {{-- This is posts --}}

        {{-- Poll (Questions) --}}
        
    </div>
@endsection
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
                 
            function Bloglike(id){
                let like = document.querySelector('#like-icon-'+id)
                console.log(like)
                let star = document.getElementById('like-count-'+id).innerHTML
                console.log(star)
                // likes = document.querySelector('.likes');
                $.ajax({
                    url: "like/"+id,
                    method: 'GET',
                    data: {
                    },
                    success: function(result) {
                        console.log('success')
                        like.classList.toggle('fa-solid');
                        star++ 
                        document.getElementById('like-count-'+id).innerHTML = star
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }
    
       
    
    </script>

    {{-- Poll Function --}}
    <script>
        // let poll = 
        // {
        //     question: "ما هى لغه البرمجه الشائعه ؟",
        //     answers: [
        //         'C++', 'Java', 'JS', "C#", "PHP", "HTML", "CSS"
        //     ],
        //     pollCount: 100,
        //     answerWeight: [0, 0, 0, 0, 0, 0, 0], 
        //     selectedAnswer: -1
        // };

        // let pollDom = {
        //     question: document.querySelector('.poll .question'),
        //     answers: document.querySelector('.poll .answers'),
        // }

        // pollDom.question.innerText = poll.question;
        // pollDom.answers.innerHTML = poll.answers.map(function(answer, i) {
        //     return (
        //         `
        //         <div class="answer" onclick="markAnswer('${i}')">
        //             ${answer}
        //             <span class="percentage-bar"></span>
        //             <span class="percentage-value"></span>
        //         </div>
        //         `
        //     );
        // }).join("");

        function markAnswer(id) {
            let rate = document.getElementById('p-value-'+id).innerHTML
            // poll.selectedAnswer = +i;
            // try {
            //     document.querySelector('.poll .answers .answer.selected').classList.remove('selected');
            // } catch (msg) {}
            // document.querySelectorAll('.poll .answers .answer')[+i].classList.add('selected');
            $.ajax({
                    url: "rate/"+id,
                    method: 'GET',
                    data: {
                    },
                    success: function(result) {
                        rate++ 
                        document.getElementById('p-value-'+id).innerHTML = rate
                        console.log('success')
                       },
                    error: function(err) {
                        console.log(err);
                    }
                });

            showResults();

        }

        function showResults() {
            let answers = document.querySelectorAll(".poll .answers .answer");
            for (let i = 0; i < answers.length; i++) {
                let percentage = 0;
                if (i == poll.selectedAnswer) {
                    percentage = Math.round(
                        (poll.answerWeight[i] + 1) * 100 / (poll.pollCount + 1)
                    );
                } else {
                    percentage = Math.round(
                        (poll.answerWeight[i]) * 100 / (poll.pollCount + 1)
                    );
                }
                answers[i].querySelector(".percentage-bar").style.width = percentage + "%";
                answers[i].querySelector(".percentage-value").innerText = percentage + "%";
            }
        }
    </script>


@endsection
