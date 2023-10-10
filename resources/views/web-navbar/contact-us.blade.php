@extends('web-navbar.contact')

@section('title-form')

إتصل بنا
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

                @if (session('msg-cotus-doctor'))
                <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
                    <i class="fa fa-check" aria-hidden="true"></i>
                {{ session('msg-cotus-doctor') }}</div>
                @endif

    <form action=" {{ route('contact-us') }}" method="POST">
        @csrf
        <div class="row">
        <div class="col">
            <input type="text" name="username" class="form__input @error('title') is-invalid @enderror" placeholder="الأسم">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col">
            <input type="text" name="address" class="form__input" placeholder="العنوان">
        </div>
    </div>
    <div class="row">

        <div class="col">
            <input type="text" name="phone" class="form__input" placeholder="رقم الجوال">
        </div>

        <div class="col">
            <input type="email" name="email" class="form__input" placeholder="البريد الإلكتروني">
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
