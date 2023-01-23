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
        <div class="newsHomePage wow fadeInDown" data-wow-duration="1.4s">
            <div class="row">
                <a href="{{ route('specialNew', 1) }}">
                    <div class="col-6">
                        <div class="clean">
                            Donate Quran
                        </div>
                    </div>
                </a>
            </div>
            <div class="profieInfo">
                <a href="#">
                    <div class="imgCon">
                        <img src="{{ asset('frontCSS/front/images/image.jpg') }}" alt="" />
                    </div>
                </a>
                <div class="infos">
                    <div class="date">منذ 4 أيام
                    </div>

                    <div class="name">
                        <a style="color: #ff1e1e !important;font-size:24px;" href="{{ route('specialNew', 1) }}">افضل
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
                <a href="{{ route('specialNew', 1) }}" style="text-decoration: none">صدقة جارية لدعم تعليم وتحفيظ
                    القران
                    Ongoing charity to support teaching and memorizing the Qur’an
                    You can help lots of people by donating little​ -
                    Link below</a>
            </div>

            <a style="text-decoration: none;" href="{{ route('specialNew', 1) }}">
                <img src="{{ asset('frontCSS/images/news/1673847005.jpg') }}" alt="" class="bigNewsImg" />

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

            <div class="comments">
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
            </div>


            <div class="greyBorder"></div>
        </div>
        {{-- This is posts --}}

        {{-- Poll (Questions) --}}
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
            <div class="question" style="border-bottom:1px solid rgb(194, 194, 194);padding-bottom:10px"></div>
            <div class="answers"></div>
        </div>
    </div>





    <script>
        let like = document.querySelector('.fa-heart'),
            likes = document.querySelector('.likes');

        function changeLikeIcon() {
            like.classList.toggle('fa-solid');
        }
    </script>

    {{-- Poll Function --}}
    <script>
        let poll = {
            question: "ما هى لغه البرمجه الشائعه ؟",
            answers: [
                'C++', 'Java', 'JS', "C#", "PHP", "HTML", "CSS"
            ],
            pollCount: 100,
            answerWeight: [0, 0, 0, 0, 0, 0, 0], //Sum = 20 --> pollWeight
            selectedAnswer: -1
        };

        let pollDom = {
            question: document.querySelector('.poll .question'),
            answers: document.querySelector('.poll .answers'),
        }

        pollDom.question.innerText = poll.question;
        pollDom.answers.innerHTML = poll.answers.map(function(answer, i) {
            return (
                `
                <div class="answer" onclick="markAnswer('${i}')">
                    ${answer}
                    <span class="percentage-bar"></span>
                    <span class="percentage-value"></span>
                </div>
                `
            );
        }).join("");

        function markAnswer(i) {
            poll.selectedAnswer = +i;
            try {
                document.querySelector('.poll .answers .answer.selected').classList.remove('selected');
            } catch (msg) {}
            document.querySelectorAll('.poll .answers .answer')[+i].classList.add('selected');
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
