@extends('tpl_home.layout')
@section('content')
<!--Services-->

<div class="services">

    <div class="services_box">

        <div class="services_card">
            <i class="fa-solid fa-truck-fast"></i>
            <h3>Giao Hàng Nhanh Chóng</h3>
            <p>
                Sách sẽ được chuẩn bị và giao ngay khi bạn đặt hàng.
            </p>
        </div>

        <div class="services_card">
            <i class="fa-solid fa-headset"></i>
            <h3>Dịch Vụ Hỗ Trợ 24/7</h3>
            <p>
                Luôn giải đáp các thắc mắc của khách hàng một cách nhanh chóng.
            </p>
        </div>

        <div class="services_card">
            <i class="fa-solid fa-tag"></i>
            <h3>Nhiều Khuyến Mãi</h3>
            <p>
                Nhiều khuyến mãi hấp dẫn luôn chờ đón bạn khi chọn mua sách ở 2H BOOKS.
            </p>
        </div>

        <div class="services_card">
            <i class="fa-solid fa-lock"></i>
            <h3>Bảo Mật Thanh Toán</h3>
            <p>
                Đảm bảo tuyệt đối cho các giao dịch trên website của 2H BOOKS.
            </p>
        </div>

    </div>

</div>

<!--Books-->

<div class="featured_boks">

   <div class="featured_book_box">
        @foreach($books as $book)
        <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{$book->image? Storage::url($book->image):''}}">
                </div>

                <div class="featurde_book_tag">
                    <h4>Tên Sách: {{$book->book_name}}</h3>
                    <h5 class="writer">Tác Giả: {{$book->author->author_name}}</h5>
                    <h5 class="writer">Loại Sách: {{ $book->category->category_name}}</h5>
                    <h5 class="book_price">Giá Khuyến Mãi: {{number_format($book->promotion_price).' '.'VNĐ'}}<sub><del><br> Giá Gốc: {{number_format($book->price).' '.'VNĐ'}} VNĐ</del></sub></h5>
                    <a href="{{route('detail',['id'=>$book->id])}}" class="f_btn">Chi Tiết</a>
                </div>

        </div>
        @endforeach
    </div>

</div>

<!--Arrivals-->

<!--About-->

<div class="about">

    <div class="about_image">
        <img src="image/about.png">
    </div>
    <div class="about_tag">
        <h1>Về Chúng Tôi</h1>
        <p>
            Nền tảng 2H BOOKS là một sản phẩm của Hoàng Hưởng được chính thức ra mắt vào năm 2023 với mục tiêu là cầu nối giữa tác giả,
            dịch giả, nhà xuất bản và bạn đọc, kho nội dung của 2H liên tục được cung cấp và cập nhật các nội dung số đa dạng giúp nâng
            cao văn hóa đọc của người Việt và mang đến một phong cách đọc sách hiện đại, tiện ích hơn.
        </p>
    </div>

</div>


<!--Banner-->
<!-- <div class="banner">
    <a href="#" class="banner_btn">Learn More</a>
</div> -->

<!--Blog-->


@endsection
