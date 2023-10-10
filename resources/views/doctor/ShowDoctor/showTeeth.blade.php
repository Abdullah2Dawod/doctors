@extends('dashbord')

@section('title2')
مدير النظام - أطباء الأسنان
@endsection

@section('content')

<div class="container-fluid">



    <div class="rew" style="display: flex;justify-content: space-between" >
        <div>
             <h4>أطباء الأسنان</h4>
        </div>
        <div>
            <a href="{{ route('create.doctor') }}" type="button" class="btn btn-primary" >إضافة طبيب
            </a>
        </div>
    </div>
    <hr>


    @if (session('msg-delete'))
    <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
        <i class="fa fa-exclamation" aria-hidden="true"></i> &nbsp; {{ session('msg-delete') }}</div>
    @endif

    <br>
    <table class="table table-striped" style="font-size: 13px !important;">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم الطبيب</th>
            <th scope="col">تخرج الطبيب</th>
            <th scope="col">عنوان الطبيب</th>
            <th scope="col">مواعيد العمل</th>
            <th scope="col">الكشفية</th>
            <th scope="col">جوال الطبيب</th>
            <th scope="col">تعديل او حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Teeth as $index=> $Teeths)
          <tr>

            <th scope="row">{{++$index}}</th>
            <td>{{$Teeths->name}}</td>
            <td>{{$Teeths->university}}</td>
            <td>{{$Teeths->addres}}</td>
            <td>{{$Teeths->work}}</td>
            <td>{{$Teeths->price}}</td>
            <td>{{$Teeths->mobaile}}</td>
            <td>
                <div style="display: flex;">
                    <div>
                    <a href="{{route('edit.doctor' , $Teeths->id )}}">
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div>
                    <a href="{{route('destroy.doctor' , $Teeths->id)}}" style="margin-right: 30px !important">
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

{{ $Teeth->links() }}

@endsection
