@extends('web-navbar.contact')

@section('title-form')

طلب إضافة طبيب
@endsection

{{-- ************************************** --}}


@section('form')

            <div class="roww" style="font-family: 'Cairo', sans-serif;">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('msg-contact-doctor'))
                <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
                    <i class="fa fa-check" aria-hidden="true"></i>
                {{ session('msg-contact-doctor') }}</div>
                @endif

                <form action=" {{ route('contact-doctor') }}" method="POST">
                    @csrf
                    <div class="row">
                    <div class="col">
                        <input type="text" name="usernamedoctor" class="form__input" placeholder="اسم الطبيب">
                    </div>

                    <div class="col">
                        <input type="text" name="specialty" class="form__input" placeholder="تخصص الطبيب">
                    </div>

                    <div class="col">
                        <input type="text" name="graduation" class="form__input" placeholder="تخرج الطبيب">
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <input type="text" name="adressdoctor" class="form__input" placeholder="عنوان الطبيب">
                    </div>

                    <div class="col">
                        <input type="text" name="phonedoctor" class="form__input" placeholder="رقم جوال الطبيب">
                    </div>
                    <div class="col">
                        <input type="email" name="emaildoctor" class="form__input" placeholder="البريد الإلكتروني">
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <input type="text" name="work" class="form__input" placeholder="مواعيد العمل">
                    </div>

                    <div class="col">
                        <input type="text" name="price" class="form__input" placeholder="سعر الكشفية">
                    </div>
                    <div class="col">
                    </div>
                </div>


                    <div class="row">
                        <input type="checkbox" name="remember_me" id="remember_me" class="">&nbsp;&nbsp;
                        <label for="remember_me">حفظ البيانات !</label>
                    </div>
                    <div class="row">
                        <button name="submit" type="submit" class="btn">إرسال</button>
                    </div>
                </form>



            </div>

@endsection
