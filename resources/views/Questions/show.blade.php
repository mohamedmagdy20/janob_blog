@extends('layouts.app')
@section('content')
    <style>
        label {
            float: right;
            clear: both
        }
    </style>
    <div class="container" style="margin-top:0;padding-top:30px;direction:rtl">
        <div class="card card-primary" style="padding-top:0">
            <div class="card-header">
                <h3 class="card-title" style="float:right;clear:both">سؤال</h3>
            </div>

            <form action="{{route('poll.update',$question->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان السؤال</label>
                        <input type="text" class="form-control" name="title" disabled id="exampleInputEmail1" value="{{$question->title}}" placeholder="عنوان السؤال">
                        @error('title')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="text" name="body" class="form-control"  disabled id="exampleInputPassword1" placeholder="المحتوى">{{$question->body}}</textarea>
                        @error('body')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div> --}}
                    <label for="exampleInputEmail1" class="p-1"> الاجابات</label>

                    <div class="form-group">
                        <div id="answer_inputs" class="row mt-2">

                            @foreach ($question->answer as $answer )
                            <div class="col-md-6 mb-2 ">
                                <input type="text" name="answers[]" disabled value="{{$answer->body}}" class="form-control">
                            </div>
                                @endforeach
                        </div>
    
                    </div>
                
                  
                    <div class="form-group">
                        <div class="img-fluid text-center">
                            <img class="w-25" src="{{asset('questions/'.$question->file)}}" alt="">
                        </div>
                    </div>
                </div>

                <center class="card-footer">
                    <a href="{{route('poll.update',$question->id)}}" class="btn btn-primary">تعديل</a>
                </center>
            </form>
        </div>
    </div>

    <script>
        // let question_input = document.querySelector('.questionNum');
        // let answerDiv = document.querySelector('#answer_inputs');
        // let div = document.createElement('div');
        // html = '';
        // div.className = "row mb-3";
        // function numberOfAnswer() {
        //     for (var i = 0; i < question_input.value; i++) {
        //         div.innerHTML += `
        //         <div class="col-md-3 mx-2 my-2">
        //                 <input type="number" class="form-control" id="answer" name="answers[]" placeholder="ادخل الاجابه">
        //             </div>`
        //         answerDiv.appendChild(div);
        //     }

        // }

        function numOfAnswer()
        {
            let inputval = $('.questionNum').val();
            html = ''
            for(let i = 0; i<inputval ; i++)
            {
                html += `
                  <div class="col-md-6 mb-2 ">
                             <input type="text" class="form-control" id="answer" name="answers[]" placeholder="ادخل الاجابه">
                        </div>
                `           
            }
        $('#answer_inputs').html(html);
    }
    </script>
@endsection
