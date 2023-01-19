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
                <h3 class="card-title" style="float:right;clear:both">اضافة مقال</h3>
            </div>
            <form action="{{route('blog.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان المقاله</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="عنوان المقاله">
                        @error('title')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="text" class="form-control" name="body" id="exampleInputPassword1" placeholder="المحتوى"></textarea>
                        @error('body')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">النوع</label>
                        <input type="text" name="type" class="form-control">
                        @error('type')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">الصوره</label>
                        <div class="input-group">
                            <div class="">
                                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">اختار الصوره</label>
                                @error('img')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">ملف او فيديو</label>
                        <div class="input-group">
                            <div class="">
                                <input type="file" name="file" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="file">ملف او فيديو</label>
                                @error('file')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
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
