@extends('layout.main')

@section('title')

طلبك - التقارير والإحصائيات
@endsection

{{-- ************************************** --}}

@section('contant')

<section class="contact_section report_section layout_padding" style="margin-top: 40px">
    <div class="container">
        <div class="heading_container">
    <h4 class="titpo" style="font-family: 'Cairo', sans-serif;">التقارير والإحصائات</h4>
</div>
<hr>
    <h5 class="mt-5">تتيح هذه الخدمة للمرضى مشاهدة التقارير وإحصائات الموقع والإستفادة منها : </h5>
    <p style="color: rgb(114, 111, 111)">- تقارير خاصة بعدد <code style="color: rgb(60, 196, 78)"><strong>الأطباء</strong></code> وتقييمهم وكافة تفاصيلهم . <br>
        - تقارير خاصة بعدد <code><strong>الإرشادات</strong></code> وتقييمها .  <br>
        - تقارير خاصة بعدد <code style="color: rgb(163, 165, 63)"><strong>المرضى</strong></code> الذين قاموا بحجز مواعيد عند الأطباء .  <br>
        - تقارير خاصة بعدد <code style="color: rgb(89, 197, 230)"><strong>الزائرون</strong></code> الى الموقع .
    </p>
    <br>
    <div class="border p-5 mb-5">

      @yield('contant1')

    </div>

  </div>
  </section>

@endsection
