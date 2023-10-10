@extends('layout.main')

@section('title')

Medical DR - الإرشادات
@endsection

{{-- ************************************** --}}

<style>


.card {

    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    -webkit-transition: box-shadow 0.5s;
    transition: box-shadow 0.5s;
}

.card a {
    color: inherit;
    text-decoration: none;
}

.card:hover {
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
}



.card__thumb {
    height: 180px;
    overflow: hidden;
    background-color: #000;
    -webkit-transition: height 0.5s;
    transition: height 0.5s;
}

.card__thumb img {
    width: 100%;
    display: block;
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
    transition: opacity 0.5s, -webkit-transform 0.5s;
    transition: opacity 0.5s, transform 0.5s;
    transition: opacity 0.5s, transform 0.5s, -webkit-transform 0.5s;
}

.card:hover .card__thumb {
    height: 35px;
}

.card:hover .card__thumb img {
    opacity: 0.6;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
}


/**
* card_BODY
**/

.card__body {
    position: relative;
    height: 105px;
    padding: 20px;
    -webkit-transition: height 0.5s;
    transition: height 0.5s;
}

.card:hover .card__body {
    height: 250px;
}


.card__title {
    margin: 0;
    padding: 0 0 10px 0;
    color: #000;
    font-weight: bold;
    text-transform: uppercase;
}

.card__description {
    margin: 0;
    padding: 0;
    color: #666C74;
    line-height: 27px;
    opacity: 0;
    -webkit-transform: translateY(45px);
    transform: translateY(45px);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
}

.card:hover .card__description {
    opacity: 1;
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}

</style>

@section('contant')

<!-- department section -->

<section class="department_section layout_padding" style="margin-top: 40px">
    <div class="department_container">
        <div class="container ">
            <div class="rew" style="display: flex;justify-content: space-between" >

            <div>
                <h4 style="font-family: 'Cairo', sans-serif;">
                        النصائح والإرشادات
                </h4>
            </div>
            <div>
                <form action="#" method="POST">
                    @csrf
            <div class="input-group" style="font-family: 'Cairo', sans-serif;">
                <button type="submit" name="submit" class="btn btn-success" style="background-color: #178066 !important; border: 1px solid #178066 !important;">
                  <i class="fas fa-search"></i>
                </button>
                <div class="form-outline">
                  <input type="search" id="qury" name="qury" class="form-control " placeholder="بحث عن نصائح .." />
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
            <hr>

                <div class="row">
                    @foreach ($guidance as $item)

                    <div class="col-md-3">

                        <article class="card">
                            <header class="card__thumb">
                                <a href="#"><img src="{{ url('guidance_imge/'.$item->image) }}"/></a>
                            </header>
                            <div class="card__body" style="font-family: 'Cairo', sans-serif !important;">
                                <h6 class="card__title" style="padding-bottom: 10px;">{{$item->name}}</h6>
                                <small>لديك 6 نصائح سريعة :</small>
                                <p class="card__description"  style="margin-top: 6px;">
                                    1- {{$item->description1}} . <br> 2- {{$item->description2}} . <br> 3- {{$item->description3}} . <br> 4- {{$item->description4}} . <br>
                                    5- {{$item->description5}} . <br> 6- {{$item->description6}} .
                                </p>
                            </div>

                        </article>

                    </div>

                    @endforeach

                </div>
        </div>
    </div>

    {{ $guidance->links() }}

</section>

<!-- end department section -->

@endsection
