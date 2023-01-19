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
                <h3 class="card-title" style="float:right;clear:both">تعديل كلمه المرور</h3>
            </div>


            <form action="{{route('users.change.password')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">كلمه المرور</label>
                        <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="*****">
                        @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">اعاده كلمه المرورر</label>
                        <input type="password" class="form-control" name="confirm_password" id="exampleInputEmail1" placeholder="*****">
                        @error('confirm_password')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <center class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ </button>
                </center>
            </form>
        </div>
    </div>
@endsection
