@extends('dashbord')

@section('title2')
مدير النظام - إضافة طبيب
@endsection

@section('content')


<div class="container-fluid" style="margin-top: -30px !important">

<div class="mb-3">
    {{--  <div class="alert {{s}}"></div>  --}}
</div>
    <!-- Modal update -->
      <div class="modal-dialog modal-lg" >
        <form action="{{route('store.doctor')}}" method="post" enctype="multipart/form-data" >

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">إضافة على بيانات الطبيب :</h5>
          </div>
          <div class="modal-body">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">اسـم الطبــيـب ثـلاثي</label>
                  <input type="text" name="name" class="form-control" id="exampleInputText1" placeholder="اســم الطـبـيـب">
                </div>

                <div class="form-group">
                  <label for=""> صورة الطبيب</label>
                  <input type="file" id="myFile" name="image">
                </div>

                <div class="form-group">
                  <label>تــخـصـص الطـبيـب</label>
                  <select class="fancyselect" name="catogre_id">
                    @foreach ($catogre as $catogres)
                        <option value="{{ $catogres->id }}">{{ $catogres->name }}</option>
                    @endforeach
                </select>
              </div>


                <div class="form-group">
                  <label>تخـرج الطــبيـب</label>
                  <input type="text" class="form-control" name="university" placeholder="إضافة تخرج الطبيب">
              </div>
                <div class="form-group">
                  <label>عنــوان الطـبـيــب</label>
                  <input type="text" class="form-control" name="addres" placeholder="إضافة عنوان الطبيب">
              </div>
                <div class="form-group">
                  <label>مواعيد عمل الطـبـيــب</label>
                  <input type="text" class="form-control" name="work" placeholder="إضافة مواعيد العمل">
              </div>
              <div class="form-group">
                <label>سعر كشفية  الطبيب</label>
                <input type="text" class="form-control" name="price" placeholder="إضافة سعر كشفية الطبيب">
            </div>
                <div class="form-group">
                  <label>جــوال الطـبـيــب</label>
                  <input type="tel" class="form-control" name="mobaile" placeholder="إضافة جوال الطبيب">
              </div>
          </div>
          <div class="btn-lg btn-block modal-footer">
            <button class="btn btn-primary btn12" type="submit" name="submit">إضافة</button>&nbsp
            <button class="btn btn-secondary btn13" type="button" data-dismiss="modal">إغـلاق</button>
        </div>
        </div>
      </div>
    </form>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    </div>

@endsection
