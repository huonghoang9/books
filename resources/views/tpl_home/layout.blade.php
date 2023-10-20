<?php
use App\Models\Category;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE BÁN SÁCH</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<section>
    <nav>
        <div class="logo">
            <img src="../image/logo.png">
        </div>

        <ul>
            <li><a href="{{route('index')}}">Trang Chủ</a></li>
            <li><a href="">Về Chúng Tôi</a></li>
            <li><a href="#Featured">Sách Đặc Sắc</a>
            <ul class="sub-menu">
                @foreach(Category::all() as $category)
                <li class=""><a href="{{route('product_cate', ['categoryId'=>$category->id])}}" data-category-id="{{$category->id}}" onclick="handleCategoryClick(this)">{{$category->category_name}}</a></li>
                @endforeach
            </ul>

            <!-- <script>
            function handleCategoryClick(element) {
            // Điều hướng đến trang chứa sản phẩm của danh mục đó
            window.location.href = `/products/${element.getAttribute("data-category-id")}`;
            }
            </script> -->
            </li>
            <li><a href="#Blog">Liên Hệ</a></li>
        </ul>

        <div class="social_icon">
             <a href="{{route('login')}}">  <i class="fa-solid fa-user"></i></i></a>
            <i class="fa-solid fa-magnifying-glass"></i>
           <a href="{{route('cart')}}"> <i class="fa-solid fa-cart-shopping"></i></a>

        </div>

    </nav>

    <div class="main">

        <div class="main_tag">
            <h1>Chào Mừng Bạn Đã Đến Với <br><span>2H BOOKS</span></h1>

            <p>
                Trang bán sách chính thống, uy tín, luôn cập nhật các mẫu sách mới nhất trên thị trường, đa dạng thể loại, phù hợp với nhiều lứa tuổi, giá cả hợp lý ...
            </p>
            <!-- <a href="#" class="main_btn">Xem Thêm</a> -->

        </div>

        <div class="main_img">
            <img src="/image/table.png">
        </div>

    </div>

</section>

<div class="container mt-4">
    @yield('content')
</div>

<!--Footer-->

<footer>
    <div class="footer_main">

        <div class="tag">
            <img src="../image/logo.png">
            <p>
                Trang bán sách chính thống, uy tín, luôn cập nhật các mẫu sách mới nhất trên thị trường, đa dạng thể loại, phù hợp với nhiều lứa tuổi, giá cả hợp lý ...
            </p>

        </div>

        <div class="tag">
            <h1>Hãy Trở Lại Nào!</h1>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Featured</a>
            <a href="#">Arrivals</a>
            <a href="#">Reviews</a>
            <a href="#">Blog</a>

        </div>

        <div class="tag">
            <h1>Liên Hệ</h1>
            <a href="#"><i class="fa-solid fa-phone"></i>+94 12 345 6789</a>
            <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 699</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>
        </div>

        <div class="tag">
            <h1>Theo Dõi Chúng Tôi </h1>
            <div class="social_link">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
        </div>

        <div class="tag">
            <h1></h1>
            <div class="search_bar">
                <input type="text" placeholder="You email id here">
                <button type="submit">Đăng Ký</button>
            </div>
        </div>
    </div>
    <p class="end">Thiết kế bởi <span><i class="fa-solid fa-face-grin"></i> Hoàng Hưởng</span></p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
