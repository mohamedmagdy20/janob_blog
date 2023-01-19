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
                <h3 class="card-title" style="float:right;clear:both"> الإعلان</h3>
            </div>


            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان الإعلان</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$ads->title}}" disabled placeholder="عنوان الإعلان">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="password" class="form-control" id="exampleInputPassword1" disabled placeholder="المحتوى">{{$ads->body}}</textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">من</label>
                            <input type="date" class="form-control" value="{{$ads->date_from}}" disabled name="date_from" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                            @error('date_from')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">الى</label>
                            <input type="date" class="form-control" value="{{$ads->date_to}}" disabled name="date_to" id="exampleInputEmail1" placeholder="عنوان الاعلان">
                            @error('date_to')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
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
                <a href="{{route('ad.edit',$ads->id)}}" class="btn btn-primary">تعديل</a>
                    </center>
            </form>
        </div>
    </div>
@endsection
