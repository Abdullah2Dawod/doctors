<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("stef/images/vf.png")}}"/>

    <title> @yield('title') </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset("stef/css/bootstrap.css")}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- font awesome style -->
    <link href="{{asset("stef/css/font-awesome.min.css")}}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/249d8cfa77.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="{{asset("stef/css/style.css")}}" rel="stylesheet" />
    <link href="{{asset("stef/css/hover.css")}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset("stef/css/responsive.css")}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Almarai&family=Cairo:wght@300&family=Changa:wght@500&family=Courgette&family=El+Messiri&family=Libre+Baskerville&family=Readex+Pro:wght@300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Almarai&family=Cairo:wght@200&family=Changa:wght@500&family=Courgette&family=El+Messiri&family=Libre+Baskerville&family=Readex+Pro:wght@300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <!-- new -->
    <link rel="stylesheet" href="{{asset("stef/dist/adminlte/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="{{asset("stef/dist/adminlte/css/bootstrap-rtl.min.css")}}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&family=Libre+Baskerville&family=Readex+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alfa+Slab+One&family=Cairo:wght@500&family=Changa:wght@300&family=El+Messiri&family=Handlee&family=IBM+Plex+Serif&family=Indie+Flower&family=Irish+Grover&family=Kaushan+Script&family=Patrick+Hand&family=Play&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alfa+Slab+One&family=Cairo:wght@500&family=Changa:wght@300&family=El+Messiri&family=Handlee&family=IBM+Plex+Serif&family=Indie+Flower&family=Irish+Grover&family=Kaushan+Script&family=Patrick+Hand&family=Play&family=Tajawal:wght@500&display=swap"
        rel="stylesheet">

    <!-- **** bootsrtap 5 ********** -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link href="{{asset("stef/form/select2.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("stef/form/css/main.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("stef/styledoctor/style.css")}}" rel="stylesheet" media="all">


</head>


    <!-- header section strats -->
    <header class="header_section" id="index.html">
        <nav class="navbar navbar-expand-lg custom_nav-container navbar-light bg-light fixed-top">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link hvr-grow" data-widget="pushmenu" href="/"><i class="fa fa-bars"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-grow" href="/"> الصفـحة الرئـيسية</a>
                        </li>

                        <!-- **************************************** -->

                        <li class="nav-item">
                            <a class="nav-link hvr-grow" href="{{route('veiwcatogre.catogre')}}">التخصصات</a>
                        </li>

                        <!-- **************************************** -->

                        <li class="nav-item">
                            <a class="nav-link hvr-grow" href="{{route('index.instr')}}">الإرشـادات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-grow" href="{{route('show.report')}}">التقارير</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link hvr-grow" href="{{route('contact-us')}}">إتـصل بنا</a>
                        </li>

                    </ul>
                    <li class="btn02 navbar-brand">
                        <a href="{{ route('login') }}" class="btn022" type="submit">تسجيل الدخول</a>
                    </li>
                </div>
                <a class="navbar-brand hvr-buzz-out" href="/">
                    <span><img src="{{asset("stef/images/dr.png")}}" style="width: 4em;margin-left: 25px">
        </span>
                </a>
        </nav>


    </header>
    <!-- end header section -->
    <!-- slider section -->



@yield('contant')


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer_col">
                    <div class="footer_contact">
                        <h4>
                            للتواصل ..
                        </h4>
                        <div class="contact_link_box">
                            <a href="cont">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                  الموقع الجغرافي
                </span>
                            </a>
                            <a href="/">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                  595418918 +972
                </span>
                            </a>
                            <a href="https://mail.google.com/mail/u/0/#inbox">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                  abd.99999.omar@gmail.com
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="footer_social">
                        <a href="https://ar-ar.facebook.com/" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/login" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://web.whatsapp.com/" target="_blank">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer_col">
                    <div class="footer_detail">
                        <h4>
                            عن الموقع ..
                        </h4>
                        <p>
                            موقع الكتروني خاص بالأطباء على مستوى وسط قطاع غزة , حيث يوفر هذا الموقع تفاصيل وعناوين ومكان كل طبيب في وسط قطاع غزة , كما أنه يسهل على الأشخاص الذين يحتاجون إلى المساعدة .
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto footer_col">
                    <div class="footer_link_box">
                        <h4>
                            الروابط ..
                        </h4>
                        <div class="footer_links">
                            <a class="active" href="/">
                الرئيسية
              </a>
                            <a class="" href="{{route('veiwcatogre.catogre')}}">
                الأطباء
              </a>
                            <a class="" href="{{route('index.instr')}}">
                الإرشادات
              </a>
                            <a class="" href="{{route('show.report')}}">
                التقارير
              </a>

                            <a class="" href="{{route('contact-us')}}">
                إتصل بنا
              </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer_col ">
                    <h4 class="text-center">
                        إنضم للموقع ..
                    </h4>
                    <form action="#">
                        <button type="submit" name="submit" value="{{route('contact-us')}}">
                        إنضمام
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="index.html">The location Medical DR<br><br></a> &copy; <span id="displayYear"></span>Created by
                    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Abdullah Dawod</a>
                </p>

            </div>
        </div>
    </footer>
    <!-- footer section -->

    <script src="{{asset("stef/styledoctor/main.js")}}"></script>
    <script src="stef/js/popper.min.js"></script>
    <script src="stef/js/owl.carousel.min.js"></script>
    <!-- jQery -->
    <script type="text/javascript" src="stef/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="stef/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="stef/js/custom.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <script src="stef/js/main.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
