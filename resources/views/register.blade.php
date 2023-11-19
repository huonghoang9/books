@extends('tpl_acc.layout')
@section('content')

<div class="body-login">
    <div class="wrapper">
        <form action="{{route('post_register')}}" method="POST">
        @csrf
            <h1>Đăng Ký</h1>

            <div class="input-box">
                <label class="text-title">Tên Đăng Nhập</label>
                <input type="text" placeholder="Nhập Tên Đăng Nhập" name="name" >
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label class="text-title">Địa Chỉ</label>
                <input type="text" placeholder="Nhập Địa Chỉ" name="address" >
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label class="text-title">Số Điện Thoại</label>
                <input type="text" placeholder="Nhập Số Điện Thoại" name="phoneNumber" >
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label class="text-title">Ngày Sinh</label>
                <input type="date" placeholder="Nhập Ngày Sinh" name="birthday">
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label class="text-title">Email</label>
                <input type="text" placeholder="Nhập Email" name="email">
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label class="text-title">Mật Khẩu</label>
                <input type="password" placeholder="Nhập Mật Khẩu" name="password" >
                <i class="bx bxs-lock-alt"></i>
            </div>



            <button type="submit" class="btn" name="dangky">Đăng Ký</button>
           
        </form>
    </div>
 </div>

 @if(session('success'))
 {{session('success')}}

 @endif
@endsection