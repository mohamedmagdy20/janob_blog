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
                <h3 class="card-title" style="float:right;clear:both">تعديل الإعلان</h3>
            </div>


            <form action="{{route('ad.update',$ads->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان الإعلان</label>
                        <input type="text" class="form-control" value="{{$ads->title}}" name="title" id="exampleInputEmail1" placeholder="عنوان الإعلان">
                        @error('title')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="body" class="form-control"  name="body" id="exampleInputPassword1" placeholder="المحتوى">{{$ads->body}}</textarea>
                        @error('body')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">من</label>
                            <input type="date" class="form-control" value="{{$ads->date_from}}" name="date_from" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                            @error('date_from')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">الى</label>
                            <input type="date" class="form-control" value="{{$ads->date_to}}" name="date_to" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                            @error('date_to')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">الصوره</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" value="{{$ads->img}}" class="custom-file-input" id="img">
                                <label class="custom-file-label" for="img">اختار الصوره</label>
                                @error('img')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="img-fluid text-center">
                            <a href="{{asset('ads/'.$ads->img)}}">
                                <img class="w-25" src="{{asset('ads/'.$ads->img)}}" alt="">
                            </a>
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
