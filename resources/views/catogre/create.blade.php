@extends('dashbord')

@section('title2')
مدير النظام - التخصصات
@endsection


@section('content')


<div class="container-fluid">


    <!-- add -->
    <div class="modal fade" id="CreateDoctor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{route('store.catogre')}}" method="POST" enctype="multipart/form-data">
            @csrf
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">اضافة بيانات التخصص</h5>
          </div>
          <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم التخصص</label>
                    <input type="text" class="form-control" name="name" placeholder="إدخال اسم التخصص">
                </div>

                <div class="form-group">
                  <label for="image">صورة توضيحية</label>
                  <input type="file" name="image" >
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            <button type="submit" name="submit" class="btn btn-primary">إضافة</button>
          </div>
        </div>
      </div>
    </form>

    </div>


    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4>التخـصـصـات</h4>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateDoctor">
              إضافة تخصص جديد
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

    @if (session('create-catog'))
    <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
        <i class="fa fa-check" aria-hidden="true"></i>
    {{ session('create-catog') }}</div>
    @endif


    <hr>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم التخصص</th>
            <th scope="col">تعديل او حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($catogre as $index=>  $catogres)

          <tr>
            <th scope="row">{{++$index}}</th>
            <td>تخصص : {{$catogres->name}}</td>

            <td>
                <div style="display: flex;">
                    <div>
                    <a href="{{route('edit.catogre' ,$catogres->id )}}" >
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div>
                    <a href="{{route('destroy.catogre' ,$catogres->id )}}" style="margin-right: 30px !important">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>

      {{ $catogre->links() }}

</div>

@endsection
