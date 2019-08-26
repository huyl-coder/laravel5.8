@extends('auth.layouts.login')
@section('title','Đăng ký')
@section('content')
    <div class="login-form">
        <div class="boder">
            <h3>Nhập thông tin của bạn</h3>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label>Tên người dùng <span class='text-danger'>*</span></label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email address <span class='text-danger'>*</span></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Mật khẩu <span class='text-danger'>*</span></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu <span class='text-danger'>*</span></label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" required> Đồng ý các điều khoản và chính sách 
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Đăng ký</button>
            <div class="register-link m-t-15 text-center">
                @if(Route::has('login'))
                    <p>Đã có tài khoản ? <a href="{{route('login')}}"> Đăng nhập</a></p>
                @endif
            </div>
        </form>
    </div>
@endsection
