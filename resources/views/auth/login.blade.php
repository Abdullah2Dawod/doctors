@extends('layouts.app')

@section('content')

<section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="login-box" style="direction: rtl">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>تسجيل الدخول</h3>
        <div class="form-group">
          <label class="control-label">الإيميل</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="text" placeholder="الإيميل" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        </div>
        <div class="form-group">
          <label class="control-label">كلمة المرور</label>

          <input id="password" type="password" placeholder="كلمة المرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">
                <label>
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="label-text" >حفظ البيانات</span>
                </label>
              </div>
          </div>
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block mkolp"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('تسجيل الدخول') }}</button>

        </div>
      </form>
    </div>
  </section>
@endsection
