@extends('templates.layout')
@section('content')
<form role="search" class="app-search d-none d-md-block me-3" action="{{route('search_promotion')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-11">
            <input type="text" placeholder="Search..." class="form-control mt-0" name="searchPromotion">
        </div>

        <div  class="col-md-1">
            <input class="btn btn-primary" type="submit" value="Search" name="btnSend">
        </div>
    </div>
    <br>
</form>

<table class="table" >
    <thead>
    <tr>
        <th>ID</th>
        <th>Mã Khuyến Mãi</th>
        <th>Sự Kiện</th>
        <th>Ngày Áp Dụng</th>
        <th>Ngày Kết Thúc</th>
        <th>Mức Giảm( % )</th>
        <th>Thao Tác</th>
    </tr>
    </thead>

    @foreach($listPromotion as $promotion)
        <tbody>
        <tr>
            <td>{{$promotion->id}}</td>
            <td>{{$promotion->discount_code}}</td>
            <td>{{$promotion->event}}</td>
            <td>{{$promotion->start}}</td>
            <td>{{$promotion->end}}</td>
            <td>{{$promotion->discount_percent}}</td>
            <td><a class="btn btn-success" role="button" href="{{route('edit_promotion',['id'=>$promotion->id])}}">Sửa</a>
                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa mã này không?')" role="button" href="{{route('delete_promotion',['id'=>$promotion->id])}}">Xóa</a>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
<a class="btn btn-primary" role="button" href="{{route('add_promotion')}}">Thêm Mã</a>
@endsection
