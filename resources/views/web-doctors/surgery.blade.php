@extends('web-navbar.doctor')

@section('title')

Medical DR - أطباء جراحة عامة
@endsection

{{-- ************************************** --}}

@section('contentdoctor')

<section class="about_section">
    <div class="container">
    <div class="rew" style="display: flex;justify-content: space-between" >
        <div>
            <h4 class="doc0" style="font-family: 'Cairo', sans-serif;">أطبـــاء الـجـراحـة <small>" {{$Surgery->count()}} "</small></h4>
        </div>
        <div>
            <form action="{{ route('search-doctor') }}" method="POST">
                @csrf
        <div class="input-group" style="font-family: 'Cairo', sans-serif;">
            <button type="submit" name="submit" class="btn btn-success" style="background-color: #178066 !important; border: 1px solid #178066 !important;">
              <i class="fas fa-search"></i>
            </button>
            <div class="form-outline">
              <input type="search" id="qury" name="qury" class="form-control " placeholder="بحث عن طبيب .." />
            </div>
          </div>
          @if (session('stats'))
          <div class="alert alert-{{ session('type') }} mt-2" style="font-family: 'Cairo', sans-serif;">
            {{ session('stats')}}
          </div>

          @endif
        </form>
        </div>
    </div>

    <br><br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('order-doctor'))
<div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
    <i class="fa fa-check" aria-hidden="true"></i>
{{ session('order-doctor') }}</div>
@endif



    <div class="row">

        @foreach ($Surgery as $Surgerys )

        <div class="col-md-4" style="margin-bottom: 40px">
            <div class="make-3D-space" style="font-family: 'Almarai', sans-serif;">
                <div class="product-card">
                    <div class="product-front">
                        <img src="{{ url('imagedoctor/'.$Surgerys->image) }}" alt="" />
                        <div class="image_overlay"></div>
                        <button type="button" class="view_details" data-bs-toggle="modal" data-bs-target="#reservation{{$Surgerys->id}}">
                        حجز موعد</button>
                        <div class="statst">
                            <div class="statst-container">
                                <span class="product_name"><small style="color: #178066;">الدكتور/ ة : </small>{{$Surgerys->name}}</span>
                                <p>{{$Surgerys->university}}</p>
                                <hr style="margin-top: -20px;">
                                <div class="product-options">

                                <p> <o style="color: #178066;">العنوان : </o> {{$Surgerys->addres}} .
                                    <br> <o style="color: #178066;">سعر الكشفية : </o> {{$Surgerys->price}} شيكل . <br>
                                    <o style="color: #178066;">مواعيد العمل : </o>{{$Surgerys->work}} . <br>
                                    <o style="color: #178066;">رقم الجوال :</o> {{$Surgerys->mobaile}} . </p>
                                <div class="rating-css" style="margin-top: -35px">
                                    <form>
                                        @csrf

                                    <div class="star-icon">
                                        <input class="inpo" type="radio" value="1" name="product_rating" checked id="rating1{{$Surgerys->id}}">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input class="inpo" type="radio" value="2" name="product_rating" id="rating2{{$Surgerys->id}}">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input class="inpo" type="radio" value="3" name="product_rating" id="rating3{{$Surgerys->id}}">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input class="inpo" type="radio" value="4" name="product_rating" id="rating4{{$Surgerys->id}}">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input class="inpo" type="radio" value="5" name="product_rating" id="rating5{{$Surgerys->id}}">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                </form>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<!-- Modal -->
<div class="modal fade" id="reservation{{$Surgerys->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="font-family: 'Cairo', sans-serif !important;">
        <form action="{{ route('store.order') }}" method="POST">
            @csrf
        <div class="page-wrapper p-t-100 p-b-100 font-robo formnew hjez modal-content">
            <div class="modal-body">
            <div class="wrapper">
                <div class="card card-1">
                    <div class="card-body" style="font-family: 'Cairo', sans-serif !important;">
                        <h3 class="title">حجز موعد مع طبيب : </h3>
                        <hr style="margin-bottom: 20px">
                        <div class="row">
                            <div class=" col">
                                <label for="">الدكتور/ة : {{$Surgerys->name}}</label>
                                </div>
                            <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col">
                            <label name="">مواعيد العمل : {{$Surgerys->work}}</label>
                            </div>
                        </div>
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="row">
                            <div class="input-group col">
                                <input class="input--style-1" type="text" placeholder="اسـم المـريض" name="name">
                            </div>
                            <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="input-group col">
                                <input class="input--style-1" type="text" name="mobaile" placeholder="رقـم جوال المريض">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group col">
                                <input class="input--style-1" type="date" placeholder="تاريخ الزيارة" name="history">
                            </div>
                            <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col">
                            </div>
                        </div>
                            <div class="p-t-20">
                                <button class="btn btn--radius btn--green" style="background-color: #178066 !important;" type="submit" name="submit">حجز الان</button>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        </form>
    </div>
</div>
        @endforeach
        </div>
    </div>
          {{ $Surgery->links() }}
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<br><br>
@endsection

