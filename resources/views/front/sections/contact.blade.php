@extends('front.layout.app')
@section('news')
    <main>
        <div class="directory">
            <div class="container">
                <div class="directoryheader">
                    <div class="title">الدليل التفاعلي</div>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="addBtn">
                        إضافة شركة
                    </button>
                </div>

                <div class="text-center">
                </div>

                <form action="https://janoob.net/search-company" method="post">
                    <input type="hidden" name="_token" value="ECErbbslJvsVEz1mHaM0iwKImZSitXXOHW3Rx4Mu">
                    <div class="dialogForm">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">البلدة</label>
                                <input class="form-control" placeholder="البلدة" type="text" name="country"
                                    value=""
                                    style="margin-top: 10px;
                                        margin-bottom: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label for="">مجال العمل</label>


                                <select class="form-control" name="work_scope"
                                    style="margin-top: 10px;
                                margin-bottom: 10px;">
                                    <option value="مجال العمل">
                                        مجال العمل
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="بحث" />
                </form>

                <div class="row">

                    <div class="directoryCard col-md-6 col-12 ">
                        <div class="row ">
                            <div class="col-md-6">
                                <img src="images/companies/1640787364.png" alt="" class="cardImg" />
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

                    <div class="directoryCard col-md-6 col-12 ">
                        <div class="row ">
                            <div class="col-md-6">
                                <img src="images/companies/ixcoders.png" alt="" class="cardImg" />
                            </div>
                            <div class="col-md-6 ">
                                <div class="cardTitle">
                                    <a href="ixcoders.html" class="contactLink" style="color: blue">IXCoders</a>
                                </div>
                                <div class="cardDes">
                                    شركة برمجية
                                </div>
                                <a href="ixcoders.html" class="contactLink"><img src="images/front/phone.svg"
                                        alt="" />+963964968244</a>
                                <a href="#" class="contactLink" style="color: blue"><img src="images/phone.html"
                                        alt="" />ixcoders.com</a>
                                <a href="#" class="contactLink"><img src="images/front/at.svg"
                                        alt="" />info@ixcoders.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="dialogTitle">اضف شركتك</div>
                        </div>
                        <div class="modal-body">
                            <form action="https://janoob.net/add-company" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="ECErbbslJvsVEz1mHaM0iwKImZSitXXOHW3Rx4Mu">
                                <div class="dialogForm">
                                    <div class="row">
                                        <div class="col-md-12 offset-md-6">
                                            <label for="">اسم الشركة</label>
                                            <input placeholder="اسم الشركة" type="text" name="name" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">رقم الهاتف</label>
                                            <input placeholder="رقم الهاتف" type="text" name="phone" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">عنوان الشركة</label>
                                            <input placeholder="عنوان الشركة" type="text" name="address" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">مجال العمل</label>
                                            <input placeholder="مجال العمل" type="text" name="work_scope" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">الدولة</label>
                                            <input placeholder="الدولة" type="text" name="country" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">المنطقة</label>
                                            <input placeholder="المنطقة" type="text" name="area" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">البلدة</label>
                                            <input placeholder="البلدة" type="text" name="city" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">رابط موقع الشركة</label>
                                            <input placeholder="رابط موقع الشركة" type="text" name="url" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">صورة</label>
                                            <input type="file" name="image" id="image" required />
                                        </div>
                                        <div class=" col-md-12">
                                            <label for="">البريد الألكتروني</label>
                                            <input placeholder="البريد الألكتروني" type="email" name="email"
                                                required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">ملخص عن الشركة</label>
                                            <textarea rows="5" placeholder="ملخص عن الشركة" name="description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" value="ارسال الطلب" />
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
