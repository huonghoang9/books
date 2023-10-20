@extends('templates.layout')
@section('content')
    <table class="table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên Sách</th>
            <th>Người Bình Luận</th>
            <th>Bình Luận</th>
            <th>Đánh Giá (Sao)</th>
            <th>Thao Tác</th>
        </tr>
        </thead>

        @foreach($listReview as $review)
            <tbody>
            <tr>
                <td>{{$review->id}}</td>
                <td>{{$review->book_name}}</td>
                <td>{{$review->name}}</td>
                <td>{{$review->comment}}</td>
                <td>{{$review->rate}}</td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn bình luận này không?')" role="button" href="{{route('delete_review',['id'=>$review->id])}}">Xóa</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
