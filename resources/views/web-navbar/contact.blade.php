@extends('layout.main')

@section('title')

Medical DR - إتصل بنا
@endsection

{{-- ************************************** --}}


@section('contant')

<style>

    .form-jus .roww > h2{
        color:#008080;
    }
    .form-jus .login_form{
        background-color: #fff;
        border-top-right-radius:20px;
        border-bottom-right-radius:20px;
        border-top:1px solid #ccc;
        border-right:1px solid #ccc;
    }
    .form-jus form{
        padding: 0 2em;
    }
    .form-jus .form__input{
        width: 100%;
        border:0px solid transparent;
        border-radius: 0;
        border-bottom: 1px solid #aaa;
        padding: 1em .5em .5em;
        padding-left: 2em;
        outline:none;
        margin:1.5em auto;
        transition: all .5s ease;
    }
    .form-jus .form__input:focus{
        border-bottom-color: #008080;
        box-shadow: 0 0 5px rgba(0,80,80,.4);
        border-radius: 4px;
    }
    .form-jus .btn{
        transition: all .5s ease;
        padding: 7px 25px;
        border-radius: 5px;
        color:#008080;
        font-weight: 600;
        background-color: #fff;
        border: 1px solid #008080;
        margin-top: 1.5em;
        margin-bottom: 1em;
    }
    .form-jus .btn:hover, .btn:focus{
        background-color: #008080;
        color:#fff;
    }

    .active {
        background-color: #1b8f8f !important;
        color: white;
        font-size: 14px;
        font-family: 'Almarai', sans-serif;

    }

    .active:hover {
        background-color: #31a8a8 !important;
        color: white;

    }

</style>



    <section class="contact_section layout_padding" style="margin-top: 40px">
        <div class="container">
        <div class="row" style="display: flex;justify-content: space-between">
            <div>
                <h4 style="font-family: 'Cairo', sans-serif;">
                    @yield('title-form')
                </h4>
            </div>
            <div>
                <a id="target1" type="button" role="button" aria-pressed="true" class="btn sddsa active" checked href="{{ route ('contact-us') }}">إتصل بنا</a>
                <a id="target2" type="button" role="button" aria-pressed="true" class="btn sddsa active" href="{{ route ('form-contact') }}">طلب إضافة طبيب</a>
                <a id="target3" type="button" role="button" aria-pressed="true" class="btn sddsa active" href="{{ route ('contact-complaints') }}">إرسال شكاوي وإقتراحات</a>
            </div>
        </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-jus">
                @yield('form')
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end contact section -->


@endsection
