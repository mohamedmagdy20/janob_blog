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
                <h3 class="card-title" style="float:right;clear:both">إضافه سؤال</h3>
            </div>

            <form action="{{route('poll.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان السؤال</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="عنوان السؤال">
                        @error('title')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="text" name="body" class="form-control" id="exampleInputPassword1" placeholder="المحتوى"></textarea>
                        @error('body')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">عدد الاجابات</label>
                        <input onchange="numOfAnswer()" type="number" class="form-control questionNum"
                            id="exampleInputEmail1" placeholder="عدد الاجابات">
                    
                        </div>

                    <div id="answer_inputs" class="row mt-2">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">الصوره</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">اختار الصوره</label>
                            </div>
                          </div>
                          @error('file')
                          <span class="text-danger"> {{ $message }} </span>
                          @enderror
                     
                    </div>
                </div>

                <center class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
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
