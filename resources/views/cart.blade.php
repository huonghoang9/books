@extends('tpl_home.layout')
@section('content')
<div class="container_cart">
	<h1>Shopping Cart</h1>
<?php

$content = Cart::content();

?>

	<div class="cart">
		<div class="products">
		@foreach ($content as $ct)
			<div class="product">
			
			
					<img src="{{$ct->image? Storage::url($ct->image):'http://127.0.0.1:8000/storage/images/1697535550media_images_2023_10_03_cheon-main-poster-printing-1-112321-031023-48.png'}}">
			

				<div class="product-info">

					<h3 class="product-name" >Tên Sách: {{$ct->name}}</h3>

					<h4 class="product-price" name="promotion_price">Giá: {{number_format($ct->price).''.'VNĐ'}}</h4>


					<p class="product-quantity">Số lượng: {{session('quantity_' . $ct->id)}}</p>
					<p class="product-quantity">Tổng Tiền: <?php $subtotal = $ct->price * session('quantity_' . $ct->id); echo number_format($subtotal).' '.'VNĐ';?>					<p class="product-remove">

					<p class="product-remove">
          			  <a href="{{ route('delete_cart', $ct->rowId) }}" class="remove"><i class="fa fa-trash" aria-hidden="true"></i></a> 
					</p>

					

				</div>

			</div>
			@endforeach

		</div>
	
		<div class="cart-total">
			<?php
			$total_amount = 0;

			foreach (Cart::content() as $product) {
				$subtotal = $product->price * session('quantity_' . $product->id);
				$total_amount += $subtotal;
			}
			
			$total_str = number_format($total_amount, 0, ',', '.');
			?>
			
			<p>
				<h3>Tổng Tiền Sản Phẩm:</h5>
				<h3>{{$total_str.' '.'VNĐ'}}</h5>
			</p>

			<label for="">Nhập Mã Giảm giá</label>
			<input type="text">

			<form action="{{route('vn_pay')}}" method="POST">
			@csrf
			<input name="total" value="{{$total_str}}" hidden >
				<button type="submit" name="redirect">Thanh Toán</button>
			</form>
			

		</div>

	</div>

</div>
@endsection