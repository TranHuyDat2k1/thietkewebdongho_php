@extends('_layout_user')
@section('content')

<div class="container">
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Tiếp Tục Vào Giỏ</a>
			 <div class="price-details">
				 <h3>Chi tiết giá cả</h3>
				 <span>Toàn bộ</span>
				 <span class="total1">@{{total|number}}đ</span>
				 <span>Chiết khấu</span>
				 <span class="total1">---</span>
				 <span>Phí vận chuyển</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOÀN BỘ</h4></li>	
			   <li class="last_price"><span>@{{total|number}}đ</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="#">Đặt hàng </a>
			 <div class="total-item">
				 <h3>Tùy chọn </h3>
				 <h4>Vourcher</h4>
				 <a class="cpns" href="#">Áp dụng </a>
				 <p><a href="#">Đăng nhập</a> để sử dụng tài khoản  - phiếu giảm giá được liên kết</p>
			 </div>
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>Túi mua sắm của tôi (2)</h1>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem" ng-repeat="row in cart">
						<div class="cart-item cyc">
							 <img src="images/8.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">@{{row.product_name}}</a><span>Model No: @{{row.product_id}}</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : @{{row.quantity}}</p></li>
						</ul>
						
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 
			 		
		 </div>
		 
		
			<div class="clearfix"> </div>
	</div>
</div>
@stop