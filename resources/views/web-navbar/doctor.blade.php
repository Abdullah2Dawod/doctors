@extends('layout.main')

@section('title')

Medical DR - جميع التخصصات
@endsection

{{-- ************************************** --}}


@section('contant')

<section class="contact_section layout_padding" style="margin-top: 40px">
    <div class="container">
        <div class="row" >
            <div>
            <h4 class="titpo" style="font-family: 'Cairo', sans-serif;">التـخـصـصـات</h4>
            </div>
        </div>
        <div class="row">
            @foreach($catogre as $catogres)
            <a href="{{route('show.Teeth' , $catogres->id )}}" type="button" class="btn btn-light" style="margin: 4px;font-family: 'Almarai', sans-serif;font-size: 13px;border-radius: 15px">أطباء {{ $catogres->name}} </a>
            @endforeach

        </div>
        <hr>

        @yield('contentdoctor')

    </div>
</section>


@endsection
