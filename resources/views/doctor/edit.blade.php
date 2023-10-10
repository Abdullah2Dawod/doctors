@extends('dashbord')

@section('title2')
مدير النظام - تعديل الأطباء
@endsection

@section('content')


<div class="container-fluid">

@if (session('msg-update'))
<div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
    <i class="fa fa-check" aria-hidden="true"></i>
{{ session('msg-update') }}</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <!-- Modal update -->
    <form action="{{route('update.doctor',$doctoor->id) }}" method="get" enctype="multipart/form-data">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">التعديل على بيانات الطبيب :</h5>
          </div>
          @csrf
          <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">اسـم الطبــيـب ثـلاثي</label>
                  <input type="text" name="name" class="form-control" placeholder="اســم الطـبـيـب" value="{{$doctoor->name}}">
                </div>

                <div class="form-group">
                    <label for="image">صورة توضيحية</label>
                    <img src="{{ url('imagedoctor/'.$doctoor->image) }}"
                    style="height: 100px; width: 150px;">
                    <input type="file" name="image">
                  </div>

                <div class="form-group">
                  <label>تخـرج الطــبيـب</label>
                  <input type="text" class="form-control" name="university" placeholder="تعديل تخرج الطبيب" value="{{$doctoor->university}}">
              </div>
                <div class="form-group">
                  <label>عنــوان الطـبـيــب</label>
                  <input type="text" class="form-control" name="addres" placeholder="تعديل عنوان الطبيب" value="{{$doctoor->addres}}">
              </div>
              <div class="form-group">
                <label>مواعيد عمل الطـبـيــب</label>
                <input type="text" class="form-control" name="work" placeholder="إضافة مواعيد العمل" value="{{$doctoor->work}}">
            </div>
              <div class="form-group">
                <label>سعر كشفية  الطبيب</label>
                <input type="text" class="form-control" name="price" placeholder="تعديل سعر كشفية الطبيب" value="{{$doctoor->price}}">
            </div>
                <div class="form-group">
                  <label>جــوال الطـبـيــب</label>
                  <input type="text" class="form-control" name="mobaile" placeholder="تعديل جوال الطبيب" value="{{$doctoor->mobaile}}">
              </div>
          </div>
          <div class="btn-lg btn-block modal-footer">
            <button class="btn btn-primary btn12" type="submit" name="submit">تـعـديـل</button>&nbsp
        </div>
        </div>
      </div>
    </form>


@endsection
