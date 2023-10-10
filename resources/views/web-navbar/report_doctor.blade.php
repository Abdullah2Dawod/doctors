@extends('web-navbar.report')


@section('title')

Medical DR - التقارير
@endsection

{{-- ************************************** --}}

@section('contant1')

<!-- Modal doctor-acont -->
<div class="modal fade" id="doctor-acont" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <table class="table text-center" style="font-family: 'Cairo', sans-serif;">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">الأطباء</th>
                <th scope="col">عددهم</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>أطباء الأسنان</td>
                <td>3</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>أطباء الجلدية</td>
                <td>5</td>
              </tr>

            </tbody>
          </table>

      </div>

    </div>
  </div>
</div>

<!-- Modal doctor-more -->

<div class="modal fade" id="doctor-more" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <table class="table text-center" style="font-family: 'Cairo', sans-serif;">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الطبيب</th>
                <th scope="col">التخصص</th>
                <th scope="col">التقييم</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>محمود سعيد جابر</td>
                <td>الأسنان</td>
                <td>90 %</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>محمود سعيد جابر</td>
                <td>الجلدية</td>
                <td>88 %</td>
              </tr>

            </tbody>
          </table>

      </div>

    </div>
  </div>
</div>

<style>

    i {
        font-size: 19px !important;
        cursor: pointer !important;
    }

    i:hover {
        color: forestgreen !important;
    }

</style>

<section>
    <div class="row">

      <div class="col-lg-3 col-md-6 mb-4 ">
        <div class="card repcard2">
          <div class="card-body text-center">
            <p class="text-uppercase small mb-2">
              <strong> التخصصات في الموقع</strong>
            </p>
            <h5 class="mb-0">
              <strong>
                <?php
                $count = DB::table('catogres')->count();
                echo $count;
                ?>
                <small>تخصص</small>
              </strong>

            </h5>

            <hr />

            <i class="fa fa-eye-slash" aria-hidden="true" style="color: rgb(104, 104, 104)"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card repcard1">
          <div class="card-body text-center">
            <p class="text-uppercase small mb-2">
              <strong>عدد الأطباء في الموقع</strong>
            </p>
            <h5 class="mb-0">
              <strong>
                <?php
                $count = DB::table('doctors')->count();
                echo $count;
                ?>
                <small>طبيب</small>

              </strong>

            </h5>

            <hr>
            <a data-bs-toggle="modal" data-bs-target="#doctor-acont"><i class="fa fa-eye" aria-hidden="true" style="color: rgb(104, 104, 104)"></i></a>


          </div>
        </div>
        <!-- Card -->
      </div>

      <div class="col-lg-3 col-md-6 mb-4 ">
        <div class="card repcard3">
          <div class="card-body text-center">
            <p class="text-uppercase small mb-2">
              <strong>عدد الحجوزات في الموقع</strong>
            </p>
            <h5 class="mb-0">
              <strong>
                <?php
                $count = DB::table('orders')->count();
                echo $count;
                ?>
                <small>حجز</small>

              </strong>

            </h5>

            <hr />

            <i class="fa fa-eye-slash" aria-hidden="true" style="color: rgb(104, 104, 104)"></i>

          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 ">
        <div class="card repcard4">
          <div class="card-body text-center">
            <p class="text-uppercase small mb-2">
              <strong>عدد الإرشادات في الموقع</strong>
            </p>
            <h5 class="mb-0">
              <strong>
                <?php
                $count = DB::table('guidances')->count();
                echo $count;
                ?>
                <small>إرشادة</small>

              <strong>

            </h5>

            <hr />

            <i class="fa fa-eye-slash" aria-hidden="true" style="color: rgb(104, 104, 104)"></i>

          </div>
        </div>
      </div>
    </div>

    <div class="row">

        <div class="col-lg-3 col-md-6 mb-4 ">
          <div class="card repcard2">
            <div class="card-body text-center">
              <p class="text-uppercase small mb-2">
                <strong>عدد الأطباء الأكثر تقييم</strong>
              </p>
              <h5 class="mb-0">
                <strong>
                  <?php
                  $count = DB::table('ratings')->count();
                  echo $count;
                  ?>
                  <small>تقييم أعلى</small>

                </strong>

              </h5>

              <hr />

              <a data-bs-toggle="modal" data-bs-target="#doctor-more"><i class="fa fa-eye" aria-hidden="true" style="color: rgb(104, 104, 104)"></i></a>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="card repcard1">
              <div class="card-body text-center">
                <p class="text-uppercase small mb-2">
                  <strong>رسائل المستخدمين</strong>
                </p>
                <h5 class="mb-0">
                  <strong>
                    <?php
                    $count = DB::table('contact_us')->count();
                    echo $count;
                    ?>
                    <small>رسالة</small>

                  </strong>

                </h5>

                <hr />

                <i class="fa fa-eye-slash" aria-hidden="true" style="color: rgb(104, 104, 104)"></i>

              </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="card repcard3">
              <div class="card-body text-center">
                <p class="text-uppercase small mb-2">
                  <strong>عدد الأطباء الراغبون بالتسجيل</strong>
                </p>
                <h5 class="mb-0">
                  <strong>
                    <?php
                    $count = DB::table('contact_doctors')->count();
                    echo $count;
                    ?>
                    <small>طبيب</small>

                  </strong>

                </h5>

                <hr />

                <i class="fa fa-eye-slash" aria-hidden="true" style="color: rgb(104, 104, 104)"></i>

              </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="card repcard4">
              <div class="card-body text-center">
                <p class="text-uppercase small mb-2">
                  <strong>عدد الشكاوي والإقتراحات</strong>
                </p>
                <h5 class="mb-0">
                  <strong>
                    <?php
                    $count = DB::table('contact_complants')->count();
                    echo $count;
                    ?>
                    <small>شكوى/اقتراح</small>

                  </strong>

                </h5>

                <hr />

                <i class="fa fa-eye-slash" aria-hidden="true" style="color: rgb(104, 104, 104)"></i>

              </div>
            </div>
        </div>
    </div>
  </section>

@endsection
