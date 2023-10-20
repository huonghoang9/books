@extends('templates.layout')
@section('content')
<form action="{{route('edit_promotion', ['id'=>request()->route('id')])}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Mã Giảm Giá</label>
        <input type="text" class="form-control" name="discount_code" value="{{$promotion->discount_code}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tên Sự Kiện</label>
        <input type="text" class="form-control" name="event" value="{{$promotion->event}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Ngày Bắt Đầu</label>
        <input type="date" class="form-control" name="start" value="{{$promotion->start}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Ngày Kết Thúc</label>
        <input type="date" class="form-control" name="end" value="{{$promotion->end}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Mức Giảm</label>
        <input type="text" class="form-control" name="discount_percent"  value="{{$promotion->discount_percent}}">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
    <a class="btn btn-primary" role="button" href="{{route('list_promotion')}}">Danh sách Mã</a>
</form>
@endsection
