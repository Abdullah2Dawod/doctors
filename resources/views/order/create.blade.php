@extends('dashbord')

@section('title2')
مدير النظام - الحجوزات
@endsection


@section('content')


<div class="container-fluid">

    @if (session('update-order'))
    <div class="alert alert-{{ session('type') }}" style="font-family: 'Cairo', sans-serif;font-size: 18px">
        <i class="fa fa-check" aria-hidden="true"></i>
    {{ session('update-order') }}</div>
    @endif

    <div class="rew" style="display: flex;justify-content: space-between">
        <div>
             <h4>الحجوزات</h4>
        </div>
    </div>
    <hr>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم المريض</th>
            {{--  <th scope="col">اسم طبيب الحجز</th>  --}}
            <th scope="col"> موعد الحجز</th>
            <th scope="col">جوال المريض</th>
            <th scope="col">تعديل او حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($order as $index=>  $orders)

          <tr>
            <th scope="row">{{++$index}}</th>
            <td>{{$orders->name}}</td>
            {{--  <td>{{ $orders->doctors->name}}</td>  --}}
            <td>{{$orders->history}}</td>
            <td>{{$orders->mobaile}}</td>
            <td>
                <div style="display: flex;">
                    <div>
                        <a href="{{route('edit.order' ,$orders->id )}}">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                        </a>
                    </div>
                <div>
                    <a href="{{route('destroy.order' ,$orders->id )}}" style="margin-right: 5px !important">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $order->links() }}


</div>

@endsection
