@extends('layouts.app')
@section('content')
    <section>
        <center>
            <form action="" method="" class="my-4">
                <input type="file" name="" id="Change_image">

                <div class="row g-3 align-items-center">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">كلمه المرور</label>
                    </div>
                    x <div class="col-auto">
                        <input type="text" id="password" class="form-control" name="password"
                            aria-describedby="passwordHelpInline">
                    </div>

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">تأكيد كلمه المرور</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="confirm_password" name="confirm_password" class="form-control"
                            aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-4">حفظ التغيرات</button>

            </form>
        </center>
    </section>
@endsection
