@extends('_layout_user')
@section('content')

<div class="arriv">
	<div class="container">
		<div class="arriv-top">
			<div class="col-md-6 arriv-left">
				<img src="../user/images/dh2.jpg" class="img-responsive" alt="">
				<div class="arriv-info">
					<h3>Đồng Hồ Nam</h3>
					<p>Giúp Phái Mạnh Trở Nên Phong Độ</p>
					<div class="crt-btn">
						<a href="http://localhost:8000/details">Mua Sắm Ngay</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 arriv-right">
				<img src="../user/images/dh1.jpg" class="img-responsive" alt="">
				<div class="arriv-info">
					<h3>Đồng Hồ Nữ</h3>
					<p> Đối với những phụ nữ hiện đại thì một chiếc đồng hồ nữ chính hãng không thể thiếu trên cổ tay</p>
					<div class="crt-btn">
						<a href="http://localhost:8000/details">Mua Sắm Ngay</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-bottm">
			<div class="col-md-8 arriv-left1">
				<img src="../user/images/dh3.jpg" style="width:800px; height:365px;" class="img-responsive" alt="">
				<div class="arriv-info1">
					<h3 style="color:#FF8C00;border-color:5px solid black; font-size: 70px; font-family:arial; italic; margin-right:100px;">Đồng Hồ Đôi</h3>
					<p style="margin-right: 70px;"> Đồng hồ đôi đẹp là sự “chắp cánh” tốt nhất cho tình yêu của hai bạn để bước thêm một nấc thang mới.</p>
					<div class="crt-btn">
						<a href="http://localhost:8000/details">Mua Sắm Ngay</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right1">
				<img src="../user/images/dh4.jpg" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="http://localhost:8000/details"><h3>Đồng Hồ Cơ<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-las">
			<div class="col-md-4 arriv-left2">
				<img src="../user/images/w4.jpg" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="http://localhost:8000/details"><h3>Đồng Hồ Pin<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="col-md-4 arriv-middle">
				<img src="../user/images/w1.jpg" class="img-responsive" alt="">
				<div class="arriv-info3">
					<h3>Đôngg Hồ Hot</h3>
					<div class="crt-btn">
						<a href="http://localhost:8000/details">Mua Sắm Ngay</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right2">
				<img src="../user/images/7.jpg" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="http://localhost:8000/details"><h3>Đồng Hồ Thanh Lịch<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="special">
        <div class="container">
            <h3>Đồng Hồ Nổi Bật </h3>
			<div class="specia-top">
                <ul class="grid_2">
                    <li ng-repeat = "i in sanpham">
                        <a href="chitietsp?id=@{{ i.id }}"><img src="/user/images/@{{i.HinhAnh}}" style=" margin-left :40px;" class="img-responsive" alt=""></a>
                        <div class="special-info grid_1 simpleCart_shelfItem">
                            <h5>@{{i.TenDongHo}}</h5>
                            <div class="item_add"><span class="item_price"><h6> @{{i.Gia|number}}đ</h6></span></div>
                            <div class="item_add"><span class="item_price"><a href="/cart" ng-click ="addToCart(i)">Thêm vào giỏ hàng </a></span></div>
                        </div>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
    </div>
		
</div>

@stop