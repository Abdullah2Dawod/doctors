
@extends('dashbord')

@section('title2')
مدير النظام - الصفحة الرئيسية
@endsection



@section('content')


<div class="container-fluid">

    <div class="row dashrowp">


        <!-- Column -->
        <div class="col-md-6 col-lg-3">
          <div class="card card-hover">
            <div class="box bg-cyan text-center">
              <h1 class="font-light text-white">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
              </h1>
              <h6 class="text-white">التخصصات</h6>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
          <div class="card card-hover">
            <div class="box bg-success text-center">
              <h1 class="font-light text-white">
                <i class="fa fa-user-md" aria-hidden="true"></i>
              </h1>
              <h6 class="text-white">الأطباء</h6>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
          <div class="card card-hover">
            <div class="box bg-warning text-center">
              <h1 class="font-light text-white">
                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
            </h1>
              <h6 class="text-white">الإرشادات</h6>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
          <div class="card card-hover">
            <div class="box bg-danger text-center">
              <h1 class="font-light text-white">
                <i class="fa fa-cogs" aria-hidden="true"></i>
              </h1>
              <h6 class="text-white">الحجوزات</h6>
            </div>
          </div>
        </div>

      </div>
      <hr>
</div>
<div class="container text-center">
@if (session('msg-create'))
<div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
    <i class="fa fa-check" aria-hidden="true"></i>
{{ session('msg-create') }}</div>
@endif
</div>
@endsection
