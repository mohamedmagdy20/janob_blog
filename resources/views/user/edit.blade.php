@extends('layouts.app')
@section('content')
    <section style="padding-top:30px;direction:rtl" class="container">
        <center>
            <div class="card" style="width: 18rem;padding:10px 20px">
                <img src="{{asset('profile/'.Auth::user()->img)}}" class="card-img-top" for="Change_image">
                <label for="Change_image"><i class="fa-solid fa-plus"></i></label>
                <form action="{{route('users.update')}}" method="POST" class="my-4" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="img" value="{{Auth::user()->img}}" id="Change_image">

                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">إسم المستخدم</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="name" class="form-control" name="name"
                              value="{{Auth::user()->name}}">
                        </div>

                        <div class="col-auto">
                            <label for="email" class="col-form-label">البريد الالكترونى</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="email" name="email" class="form-control"
                                value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4">حفظ التغيرات</button>

                </form>
            </div>
        </center>
    </section>
@endsection
