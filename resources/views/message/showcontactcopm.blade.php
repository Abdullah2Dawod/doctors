@extends('dashbord')

@section('title2')
مدير النظام - الشكاوي والإقتراحات

@endsection


@section('content')


<div class="container-fluid">

    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4>الشكاوي والإقتراحات</h4>
        </div>

    </div>
    <hr>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم المستخدم</th>
            <th scope="col">البريد الإلكتروني</th>
            <th scope="col">الشكاوي والإقتراحات</th>
            <th scope="col">حذف الرسالة</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactdoctorcomp as $index=>  $contactdoctorcomps)

          <tr>
            <th scope="row">{{++$index}}</th>
            <td>{{$contactdoctorcomps->username}}</td>
            <td>{{$contactdoctorcomps->email}}</td>
            <td>{{$contactdoctorcomps->discrption}}</td>
            <td>
                <div>
                    <a href="{{route('destroy.contactdoctorcomp' ,$contactdoctorcomps->id )}}" style="margin-right: 30px !important">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
            </td>

          </tr>
            @endforeach
        </tbody>
      </table>

      {{ $contactdoctorcomp->links() }}


</div>

@endsection
