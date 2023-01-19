@extends('layouts.app')
@section('content')
    <section>
        <center>
            <form action="{{route('user.check')}}" method="post" style="padding:30px 0">
                @csrf
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">كود التفعيل</label>
                </div>

                <div class="col-auto">
                    <input type="text" id="inputPassword6" name="code" class="form-control w-25 text-center"
                        aria-describedby="passwordHelpInline">
                </div>

                <button type="submit" class="btn btn-primary my-3">تأكيد</button>
                <a class="btn btn-info" href="{{route('users.resend')}}">اعاده الارسال</a>
            </form>
        </center>
    </section>
@endsection
