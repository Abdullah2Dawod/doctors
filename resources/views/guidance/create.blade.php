@extends('dashbord')

@section('title2')
مدير النظام - الإرشادات
@endsection


@section('content')


<div class="container-fluid">


        <!-- Modal create -->
    <div class="modal fade" id="CreateGuidance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
                <form action="{{route('store.guidance')}}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">اضافة بيانات الإرشادة</h5>
          </div>
          <div class="modal-body">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">عنوان الإرشادة</label>
                  <input type="text" class="form-control" name="name" placeholder="إدخال عنوان الإرشادة">
                </div>

                <div class="form-group">
                  <label for="">صورة توضيحية</label>
                  <input type="file" id="myFile" name="image">
                </div>

                <div class="input-group">
                <label>قم بإاضافة 6 نصائح سريعة</label>
                <input type="text" name="description1" placeholder="6-" class="form-control">
                <input type="text" name="description2" placeholder="5-" class="form-control">
                <input type="text" name="description3" placeholder="4-" class="form-control">
                <input type="text" name="description4" placeholder="3-" class="form-control">
                <input type="text" name="description5" placeholder="2-" class="form-control">
                <input type="text" name="description6" placeholder="1-" class="form-control">
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            <button type="submit" name="submit" class="btn btn-primary">إضافة</button>
          </div>
        </div>
    </form>

      </div>
    </div>


    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4>الإرشـادات</h4>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateGuidance">
              إضافة إرشادة جديدة
            </button>
        </div>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('create-ints'))
    <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
        <i class="fa fa-check" aria-hidden="true"></i>
    {{ session('create-ints') }}</div>
    @endif

    @if (session('create-update'))
    <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
        <i class="fa fa-check" aria-hidden="true"></i>
    {{ session('create-update') }}</div>
    @endif


    <hr>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">عنوان الإرشادة</th>
            <th scope="col">سرد الإرشادات</th>
            <th scope="col"> تعديل او حذف</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($test as $index=>  $guidance)

            <th scope="row">{{++$index}}</th>
            <td>{{$guidance->name}}</td>
            <td>-{{$guidance->description1}}&nbsp&nbsp&nbsp
                -{{$guidance->description2}}<br>
                -{{$guidance->description3}}&nbsp&nbsp&nbsp
                -{{$guidance->description4}}<br>
                -{{$guidance->description5}}&nbsp&nbsp&nbsp
                -{{$guidance->description6}}<br>
            </td>
            <td>
                <div style="display: flex;">
                    <div>
                    <a href="{{route('edit.guidance' ,$guidance->id )}}">
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div>
                    <a href="{{route('destroy.guidance' ,$guidance->id )}}" style="margin-right: 30px !important">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>

      {{ $test->links() }}


</div>

@endsection
