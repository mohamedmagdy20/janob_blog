@extends('layouts.app')
@section('content')
    <section style="padding-top:30px">
        <div class="container">
            <center>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('profile/'.Auth::user()->img)}}"  class="card-img-top img" alt="...">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>{{Auth::user()->name}}</strong></li>
                        <li class="list-group-item">{{Auth::user()->email}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('users.edit') }}" class="btn btn-primary">تعديل الحساب</a>
                        <a href="{{ route('users.verify') }}" class="btn btn-primary">تغير كلمه السر</a>
                    </div>
                </div>
            </center>
        </div>
    </section>
@endsection
