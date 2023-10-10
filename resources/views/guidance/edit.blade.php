@extends('dashbord')

@section('title2')
مدير النظام - تعديل الإرشادات
@endsection


@section('content')


    <div class="container-fluid">


    <!-- Modal update -->
      <div class="">
        <form action="{{route('update.guidance',$guidancee->id) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">التعديل على بيانات الإرشادات</h5>
          </div>
          <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">تـعـديل عنــوان الإرشـادة</label>
                  <input type="text" name="name" class="form-control" value="{{$guidancee->name}}" >
                </div>

                <div class="form-group">
                    <label for="image">تعديل صورة توضيحية</label>
                    <img src="{{ url('guidance_imge/'.$guidancee->image) }}"
                    style="height: 100px; width: 150px;">
                    <input type="file" name="image">
                  </div>

                <div class="input-group">
                    <label>قم بإاضافة 6 نصائح سريعة</label>
                    <input type="text" name="description1" value="{{$guidancee->description1}}" placeholder="6-" class="form-control">
                    <input type="text" name="description2" value="{{$guidancee->description2}}" placeholder="5-" class="form-control">
                    <input type="text" name="description3" value="{{$guidancee->description3}}" placeholder="4-" class="form-control">
                    <input type="text" name="description4" value="{{$guidancee->description4}}" placeholder="3-" class="form-control">
                    <input type="text" name="description5" value="{{$guidancee->description5}}" placeholder="2-" class="form-control">
                    <input type="text" name="description6" value="{{$guidancee->description6}}" placeholder="1-" class="form-control">
                    </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">تعديل</button>
          </div>
        </div>
    </form>

      </div>

    </div>




@endsection
