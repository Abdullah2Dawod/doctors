<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">

    <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{asset("stef/images/vf.png")}}" />
    <title> @yield('title2') </title>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Cairo&family=Changa:wght@500&family=El+Messiri&family=Libre+Baskerville&family=Readex+Pro:wght@300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&family=Changa:wght@500&family=Libre+Baskerville&family=Readex+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="{{asset("stef/css1/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("stef/css1/simple-line-icons.css")}}" rel="stylesheet">
    <link href="{{asset("stef/dest1/style.css")}}" rel="stylesheet">
    <link href="{{asset("stef/dest1/style1.css")}}" rel="stylesheet">

</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset("stef/images/dr.png")}}" style="width: 2.5em;"></a>
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>

            </ul>
            <ul class="nav navbar-nav pull-left hidden-md-down ms-auto" style="margin-left: 20px">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-md-down">مدير النظام</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <div class="divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>
                </li>
                        </ul>

        </div>
    </header>

    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="../home"><i class="fa fa-home" aria-hidden="true"></i>الصفحة الرئيسية <span class="tag tag-info">جدید</span></a>
                </li>

                <li class="nav-title">
                            مدير النظام
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create.catogre') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>التخصصات</a>
                </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user-md" aria-hidden="true"></i>الأطباء</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorTeeth') }}"><i class="fa fa-paw" aria-hidden="true"></i>أطباء الأسنان</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorLeather') }}"><i class="fa fa-spinner" aria-hidden="true"></i>أطباء الجلدية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorAudio') }}"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>أطباء سمعيات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorBirth') }}"><i class="fa fa-transgender" aria-hidden="true"></i>أطباء توليد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorBlood') }}"><i class="fa fa-chain-broken" aria-hidden="true"></i>أطباء أمراض الدم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorBones') }}"><i class="fa fa-steam" aria-hidden="true"></i>أطباء العظام</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorChildren') }}"><i class="fa fa-child" aria-hidden="true"></i>أطباء الأطفال</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorDigestive') }}"><i class="fa fa-steam" aria-hidden="true"></i>أطباء الجهاز الهضمي</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorEar') }}"><i class="fa fa-asterisk" aria-hidden="true"></i>أطباء أذن - أنف - حنجرة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorEyes') }}"><i class="fa fa-eye" aria-hidden="true"></i>أطباء العيون</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorGeneral') }}"><i class="fa fa-universal-access" aria-hidden="true"></i>أطباء عام</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorHeart') }}"><i class="fa fa-heartbeat" aria-hidden="true"></i>أطباء أمراض القلب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorInternally') }}"><i class="fa fa-street-view" aria-hidden="true"></i>أطباء الباطنة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorNerves') }}"><i class="fa fa-yelp" aria-hidden="true"></i>أطباء الأعصاب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorPaths') }}"><i class="fa fa-viadeo" aria-hidden="true"></i>أطباء مسالك بولية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorPhysical') }}"><i class="fa fa-blind" aria-hidden="true"></i>أطباء علاج طبيعي</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorPsychological') }}"><i class="fa fa-slideshare" aria-hidden="true"></i>أطباء نفسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index.doctorSurgery') }}"><i class="fa fa-eraser" aria-hidden="true"></i>أطباء جراحة</a>
                            </li>
                        </ul>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create.guidance') }}"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>الإرشادات</a>
                    <a class="nav-link" href="{{ route('create.order') }}"><i class="fa fa-cogs" aria-hidden="true"></i>الحجوزات</a>
                </li>

                <li class="nav-title">
                        الرسائل
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us.view') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>رسائل المستخدمين</a>
                    <a class="nav-link" href="{{ route('contact-doctor.veiw') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>طلبات الأطباء</a>
                    <a class="nav-link" href="{{ route('contact-complante.veiw') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>الشكاوي والاقتراحات</a>
                </li>
            </ul>
        </nav>
    </div>

    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">مدير النظام</a></li>
            <li class="breadcrumb-item active"> @yield('title2') </li>
        </ol>

        <div>
                @yield('content')
        </div>
    </main>

    <footer class="footer">
        <span class="text" style="text-align: center">
            © 2022 All Rights Reserved By The location Medical MD
        </span>
        <span class="pull-right">
            Created by <a href="https://mail.google.com/mail/u/0/#inbox" target ="_blank">Abdullh</a>
        </span>
    </footer>
    <script src="{{asset("stef/js1/libs/jquery.min.js")}}"></script>
    <script src="{{asset("stef/js1/libs/tether.min.js")}}"></script>
    <script src="{{asset("stef/js1/libs/bootstrap.min.js")}}"></script>
    <script src="{{asset("stef/js1/libs/pace.min.js")}}"></script>

    <script src="{{asset("stef/js/libs/Chart.min.js")}}"></script>


    <script src="{{asset("stef/js1/app.js")}}"></script>

    <script src="js/views/main.js"></script>

    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>
