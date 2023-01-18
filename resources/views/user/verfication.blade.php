@extends('layouts.app')
@section('content')
    <section>
        <center>
            <form action="" method="post" style="padding:30px 0">

                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">كود التفعيل</label>
                </div>

                <div class="col-auto">
                    <input type="text" id="password" name="password" class="form-control w-25 text-center"
                        aria-describedby="passwordHelpInline">
                </div>

                <button type="submit" class="btn btn-primary my-3">تأكيد</button>
            </form>
        </center>
    </section>
@endsection
