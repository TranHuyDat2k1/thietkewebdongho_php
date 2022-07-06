@extends('_layout_user')
@section('content')


<!-- content -->
<div class="container">
<div class="women_main" ng-app="myapp" ng-controller="detailcontroller">
	<!-- start content -->
			<div class="row single">
				<div class="col-md-9 det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>						
								<img class="etalage_thumb_image" src="/user/images/@{{s.HinhAnh}}" class="img-responsive" />
															
							</li>
							
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
					<h3>@{{s.TenDongHo}} </h3>
					<span class="brand">Thương hiệu: <a href="#">MVW </a></span>
					<br>
					<span class="code">Mã sản phẩm: <a href="#">@{{s.id}} </a></span>
					<p>Sang trọng, tinh tế</p>
						<div class="price">
							<span class="text">Giá:</span>
							<span class="price-new">@{{s.Gia|number}}VNĐ</span>

						</div>
					<div class="det_nav1">
						<h4>Chọn kích cỡ :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
								</ul>
							</div>
					</div>
					<div class="btn_form">
						<a href="/cart" ng-click="addToCart(s)">Mua</a>
					</div>
					<a href="#"><span>Đăng Nhập để lưu vào danh sách yêu thích </span></a>
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Thông tin chi tiết</h6>
					<p class="prod-desc">@{{s.MoTa}} </p>
				</div>
				<div class="single-bottom2">
					<h6>Sản phẩm tương tự</h6>
						<div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="user/images/sp6.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Casio MTP-1384D-1AVDF</a></h5>
		                           <p class="product_descr"> Với mặt số đồng hồ Casio MTP-1384D-1AVDF màu đen mạnh mẽ, kim chỉ và vạch chỉ giờ bằng số La Mã được làm mỏng tinh tế nổi bật trên nền số, dây đeo kim loại lịch lãm, đồng hồ chịu được độ sâu 10ATM phù hợp cho các hoạt động dưới nước trừ việc lặn.</p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">3.000.000</span>								
								<button class="button1"><span>Thêm vào giỏ hàng</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="user/images/sp5.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Citizen Nam-Eco-Drive</a></h5>
		                           <p class="product_descr"> Đồng hồ Citizen Eco-Drive BM6774-51A lịch lãm với mặt đồng hồ tròn màu trắng viền vàng, chữ số La Mã mạ vàng, dây đeo demi thời trang, 3 kim chỉ, 1 lịch ngày.</p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">9.000.000VND</span>								
								<button class="button1"><span>Thêm vào giỏ hàng</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
		   	  </div>
	       </div>	
	<div class="col-md-3">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4>Tất cả</h4>
			<ul>
				<li><a href="http://localhost:8000/women">Chính</a></li>
				<li><a href="#">Mới</a></li>
				<li><a href="#">Hot</a></li>
				<li><a href="#">Nam</a></li>
				<li><a href="#">Nữ</a></li>
				<li><a href="#">Sale</a></li>
			</ul>	
		</div>
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>Danh Mục</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Đồng Hồ Đôi</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Đồng Hồ Nam</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Đồng Hồ Nữ </label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Thể Thao</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sang Chảnh </label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Thanh Lịch</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Thương Gia</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fashion</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Đôi</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vàng </label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bạc</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>	
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4>Nhãn Hiệu</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>MvW</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rolex</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>BiDa</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>AmuLa</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>G-shock</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Saga</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>OP</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Candino</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rado</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mido</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orient</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tissot</label>																								
							</div>
						</div>
		</section>
		<section class="sky-form">
			<h4>Màu Sắc</h4>
			<ul class="w_nav2">
				<li><a class="color1" href="#"></a></li>
				<li><a class="color2" href="#"></a></li>
				<li><a class="color3" href="#"></a></li>
				<li><a class="color4" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
				<li><a class="color12" href="#"></a></li>
				<li><a class="color13" href="#"></a></li>
				<li><a class="color14" href="#"></a></li>
				<li><a class="color15" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
			</ul>
		</section>
		<section class="sky-form">
						<h4>CHIẾT KHẤU</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % trở lên</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % trở lên</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % trở lên</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % trở lên</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % trở lên</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % trở lên</label>
							</div>
						</div>						
		</section>
	</div>
   </div>
		   <div class="clearfix"></div>		
	  </div>
	<!-- end content -->
</div>
</div>
@stop