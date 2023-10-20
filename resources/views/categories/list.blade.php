@extends('templates.layout')
@section('content')
    <form role="search" class="app-search d-none d-md-block me-3" action="{{route('search_category')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-11">
                <input type="text" placeholder="Search..." class="form-control mt-0" name="searchCategory">
            </div>

            <div  class="col-md-1">
                <input class="btn btn-primary" type="submit" value="Search" name="btnSend">
            </div>
        </div>
        <br>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên Danh Mục</th>

            <th>Thao Tác</th>
        </tr>
        </thead>

        @foreach($listCategory as $category)
            <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                <td>
                    <a class="btn btn-success" role="button" href="{{route('edit_category',['id'=>$category->id])}}">Sửa</a>
                    <a class="btn btn-danger" role="button" href="{{route('delete_category',['id'=>$category->id])}}">Xóa</a>
                </td>

            </tr>
            </tbody>
        @endforeach
    </table>

    <a class="btn btn-primary" role="button" href="{{route('add_category')}}">Thêm </a>
@endsection
