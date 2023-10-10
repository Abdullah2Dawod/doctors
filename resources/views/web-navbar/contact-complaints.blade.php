@extends('web-navbar.contact')
@include('sweetalert::alert')
@section('title-form')

إرسال شكوى أو إقتراح
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

                @if (session('msg-comp-doctor'))
                <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
                    <i class="fa fa-check" aria-hidden="true"></i>
                {{ session('msg-comp-doctor') }}</div>
                @endif

    <form action=" {{ route('contact-compainte') }}" method="get">
        @csrf
        <div class="row">
        <div class="col">
            <input type="text" name="username" class="form__input" placeholder="الأسم">
        </div>

        <div class="col">
            <input type="email" name="email" class="form__input" placeholder="البريد الإلكتروني">
        </div>
    </div>
    <div class="row">


        <div class="col">
            <input name="discrption" tupe="text" class="form__input" cols="30" rows="8" placeholder="كتابة الإقتراحات أو الشكاوي">
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
