@extends('templates.layout')
@section('content')
    <form role="search" class="app-search d-none d-md-block me-3" action="{{route('search_book')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-11">
                <input type="text" placeholder="Search..." class="form-control mt-0" name="searchBook">
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
                <th>Tên Sách</th>
                <th>Giá</th>
                <th>Giá Khuyến Mãi</th>
                <th>Năm Xuất Bản</th>
                <th>Số Lượng</th>
                <th>Loại Sách</th>
                <th>Ảnh</th>
                <th>Mô Tả</th>
                <th>Nhà Xuất Bản</th>
                <th>Tác Giả</th>
                <th>Thao Tác</th>
            </tr>
        </thead>

        @foreach($listBook as $book)
            <tbody>
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->book_name}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->promotion_price}}</td>
                    <td>{{$book->publishing_year}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->category_name}}</td>
                    <td><img src="{{$book->image? Storage::url($book->image):''}}"  style="width: 100px; height: 100px"></td>
                    <td>{{$book->describe}}</td>
                    <td>{{$book->producer_name}}</td>
                    <td>{{$book->author_name}}</td>
                    <td></td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <a class="btn btn-primary" role="button" href="{{route('add_book')}}">Thêm </a>

@endsection
