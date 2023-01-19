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
                <h3 class="card-title" style="float:right;clear:both">تعديل المقاله</h3>
            </div>


            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان المقاله</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="عنوان المقاله">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="المحتوى"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">النوع</label>
                        <select name="" id="" class="form-control">
                            <option value="رياضه">رياضه</option>
                            <option value="رياضه">حوادث</option>
                            <option value="رياضه">دينى</option>
                        </select>
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
@endsection
