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


            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان السؤال</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="عنوان السؤال">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="المحتوى"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">عدد الأسئله</label>
                        <input onchange="numberOfAnswer()" type="number" class="form-control questionNum"
                            id="exampleInputEmail1" placeholder="عدد الأسئله">
                    </div>

                    <div class="" id="answer_inputs">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">الصوره</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">اختار الصوره</label>
                            </div>

                        </div>
                    </div>
                </div>

                <center class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                </center>
            </form>
        </div>
    </div>

    <script>
        let question_input = document.querySelector('.questionNum');
        let answerDiv = document.querySelector('#answer_inputs');
        let div = document.createElement('div');
        html = '';

        div.className = "row mb-3";


        function numberOfAnswer() {
            for (var i = 0; i < question_input.value; i++) {
                div.innerHTML += `
                <div class="col-md-3 mx-2 my-2">
                        <input type="number" class="form-control" id="answer" name="answer" placeholder="ادخل الاجابه">
                    </div>`
                answerDiv.appendChild(div);
            }

        }
    </script>
@endsection
