@extends('layout.main')

@section('title')
Medical DR - الصفحة الرئيسية
@endsection

{{-- ************************************** --}}


@section('contant')

<div class="hero_area">

    <div class="hero_bg_box">
        <img src="stef/images/header2.png" alt="">
    </div>


    <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="detail-box">
                                    <h1>
                                        Medical <b style="color: #B22727">DR</b>
                                    </h1>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    إمكانية الحجز عن بعد عند الطبيب .</p>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    أفضل الأطباء في كافة التخصصات .</p>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    إستشارات طبية وإرشادات مهمة طبية .</p>
                                    <div class="btn-box">
                                        <a href="{{route('veiwcatogre.catogre')}} " class="btn1">
                                            إحجز موعد
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="detail-box">
                                    <h1>
                                        Medical <b style="color: #B22727">DR</b>
                                    </h1>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    إمكانية الحجز عن بعد عند الطبيب .</p>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    أفضل الأطباء في كافة التخصصات .</p>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    إستشارات طبية وإرشادات مهمة طبية .</p>
                                    <div class="btn-box">
                                        <a href="{{route('veiwcatogre.catogre')}} " class="btn1">
                                            إحجز موعد
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="detail-box">
                                    <h1>
                                        Medical <b style="color: #B22727">DR</b>
                                    </h1>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    إمكانية الحجز عن بعد عند الطبيب .</p>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    أفضل الأطباء في كافة التخصصات .</p>
                                    <p><i class="fa fa-arrow-left" aria-hidden="true" style="color: rgb(0, 187, 162);background-color: rgb(255, 255, 255);border-radius: 50%;padding: 4px"></i>&nbsp&nbsp&nbsp&nbsp
                                    إستشارات طبية وإرشادات مهمة طبية .</p>
                                    <div class="btn-box">
                                        <a href="{{route('veiwcatogre.catogre')}} " class="btn1">
                                            إحجز موعد
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>

    </section>

    <!-- end slider section -->
</div>

<section class="about_section layout_margin-bottom">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="stef/images/about-img.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h3 style="font-family: 'Cairo', sans-serif;">
                           من نحن
                        </h3>
                    </div>
                    <p id="pmn">
                        موقعنا يحتوي على مجموعة من الأطباء ذو الكفاءة العالية والخبرات المتميزة من كافة التخصصات في منطقة وسط قطاع
                        غزة , حيث يستطيع المستخدم او المريض من خلال موقعنا ان يطلع على الأطباء ويختار الطبيب المناسب ثم يقوم بحجز دور له
                        , ويحتوي الموقع على إرشادات طبية في حال كان المريض بحاجة الى نصائح طبية , ويمكنه ايضاً التواصل معي مشرفي النظام
                        من خلال تعبئة الفورم في قسم التواصل .
                    </p>
                    <a href="{{route('veiwcatogre.catogre')}} ">إحجز موعد</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end the about section -->


<!-- doctor section -->

<section class="doctor_section layout_padding" id="doctors.html">
    <div class="container">
        <div class="heading_container heading_center">
            <h2 style="font-family: 'Cairo', sans-serif;">
                الأطـبــاء
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="box hvr-glow">
                    <div class="img-box">
                        <img src="stef/images/d1.jpg" alt="">
                    </div>
                    <div class="detail-box">

                        <h5>
                            تـخـصص أسنـان
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="box hvr-glow">
                    <div class="img-box">
                        <img src="stef/images/d2.jpg" alt="">
                    </div>
                    <div class="detail-box">

                        <h5>
                            تـخـصص جلديـة
                        </h5>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="box hvr-glow">
                    <div class="img-box">
                        <img src="stef/images/d3.jpg" alt="">
                    </div>
                    <div class="detail-box">

                        <h5>
                            تـخـصص عظـام
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_box202">
            <a href="{{route('veiwcatogre.catogre')}} " class="btn_box20" type="submit">كـافـة الأطــباء</a>
        </div>
    </div>
</section>

<!-- end doctor section -->



@endsection

