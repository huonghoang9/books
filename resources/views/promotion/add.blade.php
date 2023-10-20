@extends('templates.layout')
@section('content')
<form action="{{route('add_promotion')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Mã Giảm Giá</label>
        <input type="text" class="form-control" name="discount_code">
    </div>

    <div class="mb-3">
        <label class="form-label">Tên Sự Kiện</label>
        <input type="text" class="form-control" name="event">
    </div>

    <div class="mb-3">
        <label class="form-label">Ngày Bắt Đầu</label>
        <input type="date" class="form-control" name="start">
    </div>

    <div class="mb-3">
        <label class="form-label">Ngày Kết Thúc</label>
        <input type="date" class="form-control" name="end">
    </div>

    <div class="mb-3">
        <label class="form-label">Mức Giảm</label>
        <input type="text" class="form-control" name="discount_percent">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
    <a class="btn btn-primary" role="button" href="{{route('list_promotion')}}">Danh sách Mã</a>
</form>
@endsection
