@extends('templates.layout')
@section('content')

    <form action="{{route('edit_category', ['id'=>request()->route('id')])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Sửa Danh Mục</label>
            <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <a class="btn btn-primary" role="button" href="{{route('list_category')}}">Danh sách</a>
    </form>
@endsection
