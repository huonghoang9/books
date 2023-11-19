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
                <input class="minus is-form" >
                <input aria-label="quantity" class="input-qty" max="10" min="1"  type="number" value="1" name="quantityBook">
                <input class="plus is-form">
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
           
                <button  type="submit" class="btn">Mua Ngay</button>
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

<div class="list_cmt">
  <h2>Bình luận Và Đánh Giá</h2>
  <?php
use App\Models\Review;
use App\Models\User;
?>
  @php
    $comments = Review::where('book_id', $detailBook->id)->get();
    foreach ($comments as $comment) {
      $comment->user = User::find($comment->user_id);
    }
  @endphp

  @foreach ($comments as $comment)
    <div class="comment">
      <p>Tên Người Bình Luận: {{ $comment->user->name }}</h3>
      <p>Nội Dung: {{ $comment->comment }}</p>
      <div class="rating">
        @for ($i = 1; $i <= $comment->rating; $i++)
          <i class="fas fa-star"></i>
        @endfor
        @for ($i = $comment->rating + 1; $i <= 5; $i++)
          <i class="far fa-star"></i>
        @endfor
      </div>
      <p class="time">Được bình luận lúc: {{ $comment->created_at }}</p>
    </div>
  @endforeach
</div>


<div class="cmt">
<form action="cmt" method="POST">
    @csrf

    <input type="text" name="book_id" value="{{$detailBook->id }}" hidden>

    <div class="form-group">
        <h4>Bạn Hãy Bình Luận Về Sách Của Chúng Mình Nhé</label> <br>
        <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
    </div>

    <div class="stars">
    <h4 >Hãy Đánh Giá Về Sách Của Chúng Mình</label> <br>
    <input type="radio" name="rating" value="1" id="star-1" class="sr-only">
    <label for="star-1" class="star"><i class="fas fa-star"></i></label>
    <input type="radio" name="rating" value="2" id="star-2" class="sr-only">
    <label for="star-2" class="star"><i class="fas fa-star"></i></label>
    <input type="radio" name="rating" value="3" id="star-3" class="sr-only">
    <label for="star-3" class="star"><i class="fas fa-star"></i></label>
    <input type="radio" name="rating" value="4" id="star-4" class="sr-only">
    <label for="star-4" class="star"><i class="fas fa-star"></i></label>
    <input type="radio" name="rating" value="5" id="star-5" class="sr-only">
    <label for="star-5" class="star"><i class="fas fa-star"></i></label>
  </div>

    <button class="btn_cmt" type="submit" class="btn btn-primary">Gửi</button>
</form>
</div>

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


