@extends('dashbord')

@section('title2')
مدير النظام - تعديل الحجوزات
@endsection


@section('content')


    <div class="container-fluid">


    <!-- Modal update -->
      <div class="">
        <form action="{{route('update.order',$order->id) }}" method="post">
            @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">التعديل على الجحوزات</h5>
          </div>
          <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">تـعـديل اسم المريض</label>
                  <input type="text" name="name" class="form-control" value="{{$order->name}}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">تـعـديل رقم المريض</label>
                  <input type="text" name="mobaile" class="form-control" value="{{$order->mobaile}}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">تـعـديل تاريخ الحجز</label>
                  <input type="text" name="history" class="form-control" value="{{$order->history}}" >
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
