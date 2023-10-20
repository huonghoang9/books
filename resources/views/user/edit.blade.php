@extends('templates.layout')
@section('content')

    <form action="{{route('edit_user', ['id'=>request()->route('id')])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <label for="floatingInput">Tên Người Dùng</label>
            <input type="text" placeholder="Tên Người Dùng" name="name" class="form-control" value="{{$user->name}}">
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Email</label>
            <input type="text" placeholder="Email" name="email" class="form-control" value="{{$user->email}}">
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Mật Khẩu</label>
            <input type="password" placeholder="Mật Khẩu" name="password" class="form-control" value="{{$user->password}}">
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Số Điện Thoại</label>
            <input type="text" placeholder="Số Điện Thoại" name="phoneNumber" class="form-control" value="{{$user->phoneNumber}}">
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Ngày Sinh</label>
            <input type="date" placeholder="Ngày Sinh" name="birthday" class="form-control" value="{{$user->birthday}}">
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Địa Chỉ</label>
            <input type="text" placeholder="Địa Chỉ" name="address" class="form-control" value="{{$user->address}}">
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Vai Trò</label>
            <br>
            <input type="radio" name="role" value="0" checked  {{$user->role == 0? 'checked': ''}}">
            <label for="">Admin</label>
            <input type="radio" name="role" value="1"  {{$user->role == 1? 'checked': ''}}>
            <label for="">Khách</label>
        </div>

        <button type="submit" class="btn btn-primary">Sửa</button>
        <td><a class="btn btn-primary" role="button" href="{{route('list_user')}}">Danh sách</a>
    </form>
@endsection
