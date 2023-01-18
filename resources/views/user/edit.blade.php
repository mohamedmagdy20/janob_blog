@extends('layouts.app')
@section('content')
    <section style="padding-top:30px;direction:rtl" class="container">
        <center>
            <div class="card" style="width: 18rem;padding:10px 20px">
                <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" class="card-img-top" for="Change_image">
                <label for="Change_image"><i class="fa-solid fa-plus"></i></label>
                <form action="" method="" class="my-4">
                    <input type="file" name="" id="Change_image">

                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">إسم المستخدم</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="name" class="form-control" name="username"
                                aria-describedby="passwordHelpInline">
                        </div>

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">البريد الالكترونى</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="password" name="password" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4">حفظ التغيرات</button>

                </form>
            </div>
        </center>
    </section>
@endsection
