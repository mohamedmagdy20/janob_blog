@extends('front.layout.app')
@section('news')
    <main>
        <style>
            label {
                float: right;
                clear: both
            }
        </style>
        <div class="container" style="margin-top:0;padding-top:30px;direction:rtl">
            <div class="card card-primary" style="padding-top:0">
                <div class="card-header">
                    <h3 class="card-title" style="float:right;clear:both">إرسال رساله</h3>
                </div>


                <form action="{{route('message.store')}}"  method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">اسمك</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                placeholder="اسمك اختيارى">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">المحتوى</label>
                            <textarea type="text" class="form-control" name="message" id="exampleInputPassword1" placeholder="المحتوى"></textarea>
                        </div>

                    </div>

                    <center class="card-footer">
                        <button type="submit" class="btn btn-primary">إرسال</button>
                    </center>
                </form>
            </div>
            <div class="row directory">

                <div class="directoryCard col-md-6">
                    <div class="row ">
                        <div class="col-md-6">
                            <img src="{{ asset('frontCSS/images/companies/1640787364.png') }}" alt=""
                                class="cardImg" />
                        </div>
                        <div class="col-md-6 ">
                            <div class="cardTitle">
                                <a href="janoob.html" class="contactLink" style="color: blue">موقع جنوب - كافة الاخبار
                                    من النقب</a>
                            </div>
                            <div class="cardDes">
                                يعتبر &quot;موقع جنوب&quot; اهم وسائل الاعلام العربية في منطقة النقب - منطقة بئر السبع
                                وضواحيها
                            </div>
                            <a href="janoob.html" class="contactLink"><img src="images/front/phone.svg"
                                    alt="" />088594822</a>
                            <a href="#" class="contactLink" style="color: blue"><img src="images/phone.html"
                                    alt="" />janoob.net</a>
                            <a href="#" class="contactLink"><img src="images/front/at.svg"
                                    alt="" />abed38107@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
