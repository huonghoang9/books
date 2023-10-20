@extends('templates.layout')
@section('content')

    <table class="table ">
        <th>ID</th>
        <th>Tên người dùng</th>
        <th>Email</th>
        <th>Mật Khẩu</th>
        <th>Địa Chỉ</th>
        <th>Số Điện Thoại</th>
        <th>Ngày Sinh</th>
        <th>Vai trò</th>
        <th>Thao tác</th>
        @foreach($listUser as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password  }}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phoneNumber}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->role== 0? 'admin': 'khách'}}</td>
                <td>
                    <a class="btn btn-primary" role="button" href="{{route('edit_user',['id'=>$user->id])}}">Sửa</a>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa thông tin người dùng này không ?')" href="{{route('delete_user',['id'=>$user->id])}}" role="button">Xóa</a></td>
            </tr>
        @endforeach
    </table>
    <td><a class="btn btn-primary" role="button" href="{{route('add_user')}}">Thêm</a>
@endsection
