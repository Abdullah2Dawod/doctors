@extends('dashbord')

@section('title2')
مدير النظام - طلبات الأطباء
@endsection


@section('content')


<div class="container-fluid">

    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4> طلبات الأطباء</h4>
        </div>

    </div>
    <hr>
    <br>
    <table class="table table-striped" style="font-size: 12px !important;">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم الطبيب</th>
            <th scope="col">تخصص الطبيب</th>
            <th scope="col">تخرج الطبيب</th>
            <th scope="col">عنوان الطبيب</th>
            <th scope="col">جوال الطبيب</th>
            <th scope="col">البريد الإلكتروني</th>
            <th scope="col">مواعيد العمل</th>
            <th scope="col">سعر الكشفية</th>
            <th scope="col">حذف الرسالة</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactdoctor as $index=>  $contactdoctors)

          <tr>
            <th scope="row">{{++$index}}</th>
            <td>{{$contactdoctors->usernamedoctor}}</td>
            <td>{{$contactdoctors->specialty}}</td>
            <td>{{$contactdoctors->graduation}}</td>
            <td>{{$contactdoctors->adressdoctor}}</td>
            <td>{{$contactdoctors->phonedoctor}}</td>
            <td>{{$contactdoctors->emaildoctor}}</td>
            <td>{{$contactdoctors->work}}</td>
            <td>{{$contactdoctors->price}}</td>
            <td>
                <div>
                    <a href="{{route('destroy.contactdocotr' ,$contactdoctors->id )}}">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
            </td>

          </tr>
            @endforeach
        </tbody>
      </table>

      {{ $contactdoctor->links() }}


</div>

@endsection
