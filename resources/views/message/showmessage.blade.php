@extends('dashbord')

@section('title2')
مدير النظام - رسائل المستخدمين
@endsection


@section('content')


<div class="container-fluid">

    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4>رسائل المستخدمين</h4>
        </div>

    </div>
    <hr>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم المستخدم</th>
            <th scope="col">العنوان</th>
            <th scope="col">رقم الجوال</th>
            <th scope="col">البريد الإلكتروني</th>
            <th scope="col">حذف الرسالة</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactus as $index=>  $contactuss)

          <tr>
            <th scope="row">{{++$index}}</th>
            <td>{{$contactuss->username}}</td>
            <td>{{$contactuss->address}}</td>
            <td>{{$contactuss->phone}}</td>
            <td>{{$contactuss->email}}</td>
            <td>
                <div>
                    <a href="{{route('destroy.contactus' ,$contactuss->id )}}" style="margin-right: 30px !important">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
            </td>

          </tr>
            @endforeach
        </tbody>
      </table>

      {{ $contactus->links() }}


</div>

@endsection
