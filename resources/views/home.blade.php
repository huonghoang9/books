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

    <h1>Top 10 Sách Nổi Bật</h1>

    <div class="featured_book_box">
        @foreach($top10Books as $book)
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

<div class="arrivals">
    <h1>Sách Mới Nhất</h1>

    <div class="arrivals_box">

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_1.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_2.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_3.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_4.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_5.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_6.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_7.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_8.webp">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_9.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="image/arrival_10.jpg">
            </div>
            <div class="arrivals_tag">
                <p>New Arrivals</p>
                <div class="arrivals_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="#" class="arrivals_btn">Learn More</a>
            </div>
        </div>

    </div>

</div>

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


<div class="reviews">
    <h1>Reviews</h1>

    <div class="review_box">

        <div class="review_card">
            <i class="fa-solid fa-quote-right"></i>
            <div class="card_top">
                <img src="image/review_1.png">
            </div>
            <div class="card">
                <h2>John Deo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure
                    distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore,
                    tenetur itaque nostrum voluptas excepturi aut.
                </p>
                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </div>
        </div>

        <div class="review_card">
            <i class="fa-solid fa-quote-right"></i>
            <div class="card_top">
                <img src="image/review_2.png">
            </div>
            <div class="card">
                <h2>John Deo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure
                    distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore,
                    tenetur itaque nostrum voluptas excepturi aut.
                </p>
                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </div>
        </div>

        <div class="review_card">
            <i class="fa-solid fa-quote-right"></i>
            <div class="card_top">
                <img src="image/review_3.png">
            </div>
            <div class="card">
                <h2>John Deo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure
                    distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore,
                    tenetur itaque nostrum voluptas excepturi aut.
                </p>
                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </div>
        </div>

        <div class="review_card">
            <i class="fa-solid fa-quote-right"></i>
            <div class="card_top">
                <img src="image/review_4.png">
            </div>
            <div class="card">
                <h2>John Deo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure
                    distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore,
                    tenetur itaque nostrum voluptas excepturi aut.
                </p>
                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </div>
        </div>

    </div>

</div> -->

<!--Banner-->
<!-- <div class="banner">
    <a href="#" class="banner_btn">Learn More</a>
</div>

<!--Blog-->

<div class="blog">
    <h1>Tin Tức</h1>
    <div class="blog_box">

        <div class="blog_card">
            <div class="blog_img">
                <img src="image/blog_1.jpg">
            </div>
            <div class="blog_tag">
                <h2>Bloger</h2>
                <p>
                    Nền tảng 2H BOOKS là một sản phẩm của Hoàng Hưởng được chính thức ra mắt vào năm 2023 với mục tiêu là cầu nối giữa tác giả,
                    dịch giả, nhà xuất bản và bạn đọc, kho nội dung của 2H liên tục được cung cấp và cập nhật các nội dung số đa dạng giúp nâng
                    cao văn hóa đọc của người Việt và mang đến một phong cách đọc sách hiện đại, tiện ích hơn.
                </p>
                <div class="blog_icon">
                    <i class="fa-solid fa-calendar-days"></i>
                    <i class="fa-solid fa-heart"></i>
                </div>
            </div>
        </div>

        <div class="blog_card">
            <div class="blog_img">
                <img src="image/blog_2.jpg">
            </div>
            <div class="blog_tag">
                <h2>Bloger</h2>
                <p>
                    Nền tảng 2H BOOKS là một sản phẩm của Hoàng Hưởng được chính thức ra mắt vào năm 2023 với mục tiêu là cầu nối giữa tác giả,
                    dịch giả, nhà xuất bản và bạn đọc, kho nội dung của 2H liên tục được cung cấp và cập nhật các nội dung số đa dạng giúp nâng
                    cao văn hóa đọc của người Việt và mang đến một phong cách đọc sách hiện đại, tiện ích hơn.
                </p>
                <div class="blog_icon">
                    <i class="fa-solid fa-calendar-days"></i>
                    <i class="fa-solid fa-heart"></i>
                </div>
            </div>
        </div>

        <div class="blog_card">
            <div class="blog_img">
                <img src="image/blog_3.jpg">
            </div>
            <div class="blog_tag">
                <h2>Bloger</h2>
                <p>
                    Nền tảng 2H BOOKS là một sản phẩm của Hoàng Hưởng được chính thức ra mắt vào năm 2023 với mục tiêu là cầu nối giữa tác giả,
                    dịch giả, nhà xuất bản và bạn đọc, kho nội dung của 2H liên tục được cung cấp và cập nhật các nội dung số đa dạng giúp nâng
                    cao văn hóa đọc của người Việt và mang đến một phong cách đọc sách hiện đại, tiện ích hơn.
                </p>
                <div class="blog_icon">
                    <i class="fa-solid fa-calendar-days"></i>
                    <i class="fa-solid fa-heart"></i>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
