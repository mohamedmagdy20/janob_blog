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
                <h3 class="card-title" style="float:right;clear:both">إضافه الإعلان</h3>
            </div>


            <form action="{{route('ad.store')}}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان الإعلان</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                        @error('title')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="text" name="body" class="form-control" id="exampleInputPassword1" placeholder="المحتوى"></textarea>
                        @error('body')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">من</label>
                            <input type="date" name="date_from" class="form-control" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                            @error('date_from')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">الى</label>
                            <input type="date" name="date_to" class="form-control" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                            @error('date_to')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">الصوره</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">اختار الصوره</label>
                                @error('img')
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
