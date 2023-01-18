@extends('layouts.app')
@section('content')
    <section style="padding-top:30px">
        <div class="container">
            <center>
                <div class="card" style="width: 18rem;">
                    <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" class="card-img-top" alt="...">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>محمد ماهر محمد</strong></li>
                        <li class="list-group-item">mobamedmaher@gmail.com</li>
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
