@extends('dashbord')

@section('title2')
مدير النظام - أطباء العظام
@endsection

@section('content')

<div class="container-fluid">



    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4>أطباء العظام</h4>
        </div>
        <div>
          <a href="{{ route('create.doctor') }}" type="button" class="btn btn-primary" >إضافة طبيب
          </a>
        </div>
    </div>
    <hr>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم الطبيب</th>
            <th scope="col">تخرج الطبيب</th>
            <th scope="col">عنوان الطبيب</th>
            <th scope="col">الكشفية</th>
            <th scope="col">جوال الطبيب</th>
            <th scope="col">تعديل او حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Bones as $index=> $Bonees)
          <tr>

            <th scope="row">{{++$index}}</th>
            <td>{{$Bonees->name}}</td>
            <td>{{$Bonees->university}}</td>
            <td>{{$Bonees->addres}}</td>
            <td>{{$Bonees->price}}</td>
            <td>{{$Bonees->mobaile}}</td>
            <td>
                <div style="display: flex;">
                    <div>
                        <a href="{{route('edit.doctor' , $Bonees->id )}}">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div>
                    <a href="{{route('destroy.doctor' , $Bonees->id)}}" style="margin-right: 30px !important">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </td>

          </tr>
          @endforeach

        </tbody>
    </table>

</div>


@endsection
