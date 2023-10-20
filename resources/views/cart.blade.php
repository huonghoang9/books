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

			 <img src="{{isset($ct->options['image']) ? Storage::url($ct->options['image']) : ' '}}">

				<div class="product-info">

					<h3 class="product-name" >Tên Sách: {{$ct->name}}</h3>

					<h4 class="product-price" name="promotion_price">Giá: {{number_format($ct->price).''.'VNĐ'}}</h4>


					<p class="product-quantity">Số lượng: {{session('quantity_' . $ct->id)}}</p>
					<p class="product-quantity">Tổng Tiền: <?php $subtotal = $ct->price * session('quantity_' . $ct->id); echo number_format($subtotal).' '.'VNĐ';?>					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<a href="{{route('delete_cart', $ct->rowId)}}" class="remove"></a>

					</p>

				</div>

			</div>
			@endforeach

		</div>
	
		<div class="cart-total">

			<p>

				<span>Tổng Tiền Sản Phẩm:</span>

				<span>{{Cart::subtotal().' '.'VNĐ'}}</span>

			</p>

			<a href="#">Thanh Toán</a>

		</div>

	</div>

</div>
@endsection