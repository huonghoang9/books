@extends('tpl_home.layout')
@section('content')
<div class="detail">
    <form action="{{route('cart')}}" method="POST">
    @csrf
    <div class="main_card">
        <h2>{{$detailBook->book_name}}</h2>
        <h4 style="padding: 5px;" class="writer">Tác Giả: {{$detailBook->author->author_name}}</h5>
        <h4 style="padding: 5px;" class="writer">Loại Sách: {{ $detailBook->category->category_name}}</h5>
        <h4 style="padding: 5px;" class="book_price">Giá Khuyến Mãi: {{number_format($detailBook->promotion_price).' '.'VNĐ'}} <sub><del><br> Giá Gốc:{{number_format($detailBook->price).' '.'VNĐ'}} </del></sub></h4> 

        <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" class="input-qty" max="10" min="1"  type="number" value="1" name="quantityBook">
                <input class="plus is-form" type="button" value="+">
        </div>

        <input type="hidden" name="bookID_hidden" value="{{$detailBook->id}}">
       
            <div class="details">

                <p class="heading">Lợi Ích</p>
                <ul>
                    <li>Đổi trả hàng trong vòng 7 ngày</li>
                    <li>Sử dụng mỗi 3.000 BBxu để được giảm 10.000đ</li>
                    <li>Freeship nội thành Hà Nội từ 150.000đ</li>
                </ul>
            </div>

            <div>
                <button type="submit" class="btn">Thêm Vào Giỏ</button>
           
                <button type="submit" class="btn">Mua Ngay</button>
            </div>
    </div>
    </form>

    <div class="small_card">
        <div class="icon">
            <i class="fa-solid fa-share"></i>
            <i class="fa-regular fa-heart"></i>
        </div>
        <div class="image">
        <img src="{{$detailBook->image? Storage::url($detailBook->image):''}}">
        </div>

    </div>
</div>

<div class="category">
<h2  style="margin-left: 15px; margin-bottom: 15px;">Danh Mục</h2>
    @foreach($categories as $category)
    <div class="category_list">
      <a class="category_link" href="{{route('product_cate', ['categoryId'=>$category->id])}}" data-category-id="{{$category->id}}"> {{$category->category_name}}</a>
    </div>
    @endforeach
    </div>
</div>

<script>
function handleCategoryClick(element) {
  // Lấy ID của danh mục
  const categoryId = element.getAttribute("data-category-id");

  // Điều hướng đến trang chứa sản phẩm của danh mục đó
  window.location.href = `/products/${categoryId}`;
}
</script>

<div class="featured_boks">
    <h1>Các Sản Phẩm Tương Tự</h1>
    <div class="featured_book_box">
    @foreach($similarBook as $similar)
        <div class="featured_book_card">
            <div class="featurde_book_img">
            <img src="{{$similar->image? Storage::url($similar->image):''}}">
            </div>

            <div class="featurde_book_tag">
                <h2>{{$similar->book_name}}</h2>
                <a href="{{route('detail',['id'=>$similar->id])}}" class="f_btn">Chi Tiết</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


