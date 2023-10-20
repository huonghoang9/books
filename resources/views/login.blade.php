@extends('tpl_acc.layout')
@section('content')
<div class="body-login">
    <div class="wrapper">
        <form action="">
            <h1>Đăng Nhập</h1>
            <div class="input-box">
                <label class="text-title">Email</label>
                <input type="text" placeholder="Nhập Email" >
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label class="text-title">Password</label>
                <input type="password" placeholder="Nhập Mật Khẩu" >
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember-forgot">
                <label for="">
                    <input type="checkbox"> Remember Me</label>
                <a href="">Quên Mật Khẩu ?</a>
            </div>

            <button type="submit" class="btn">Đăng Nhập</button>
            <div class="register-link">
                <p>Không Có Tài Khoản? <a href="{{route('register')}}">Đăng Ký</a></p>
            </div>
        </form>
    </div>
 </div>
@endsection