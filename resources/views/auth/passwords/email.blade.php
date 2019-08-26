@extends('auth.layouts.login')
@section('title','Quên mật khẩu')
@section('content')
    <div class="login-form">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="register-link m-t-15 pull-right">
                @if(Route::has('login'))
                    <p>Đã có tài khoản ? <a href="{{route('login')}}"> Đăng nhập</a></p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-flat m-b-15">Gửi link đặt lại mật khẩu</button>
            <div class="register-link m-t-15 text-center">
                @if (Route::has('register'))
                    <p>Chưa có tài khoản ? <a href="{{route('register')}}"> Đăng ký</a></p>
                @endif
            </div>
        </form>
    </div>
@endsection
