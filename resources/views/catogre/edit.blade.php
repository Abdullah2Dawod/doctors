@extends('dashbord')

@section('title2')
مدير النظام - تعديل  تخصصات
@endsection


@section('content')



<!-- Modal update -->
  <div class="container">
    <form action="{{route('update.catogre',$catogreer->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">التعديل على بيانات التخصص</h5>
      </div>
      <div class="modal-body">
            $csrf
            <div class="form-group">
              <label for="exampleInputEmail1">اسم التخصص</label>
              <input type="text" class="form-control" name="name" placeholder="تعديل اسم التخصص" value="{{$catogreer->name}}">
            </div>

            <div class="form-group">
                <label for="image">صورة توضيحية</label>
                <img src="{{ url('image/'.$catogreer->image) }}"
                style="height: 100px; width: 150px;">
                <input type="file" name="image">
              </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">تعديل</button>
      </div>
    </div>
 </form>
  </div>

@endsection
