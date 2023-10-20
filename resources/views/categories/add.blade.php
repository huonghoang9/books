@extends('templates.layout')
@section('content')

    <form action="{{route('add_category')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Danh Mục</label>
            <input type="text" class="form-control" name="category_name">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a class="btn btn-primary" role="button" href="{{route('list_category')}}">Danh sách </a>
    </form>
@endsection
