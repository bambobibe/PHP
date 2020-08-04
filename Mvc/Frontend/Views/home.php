<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="Assets/Frontend/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/css/style1.css">
	<link rel="stylesheet" href="Assets/Frontend/css/all.min.css" type="text/css">
	<script src="https:kit.fontawesome.com/4a85de6541.js"></script>
	<script type="text/javascript" src="Assets/Frontend/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="Assets/Frontend/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row text-center padding">
			<div class="col-12 col-xs-12 col-sm-12 col-md-9 col-xl-12">
				<ul>
					<li><a href="#"> Phòng</a></li>
					<li>|</li>
					<li><a href="#"> Khoa</a></li>
					<li>|</li>
					<li><a href="#"> Trung tâm đào tạo</a></li>
					<li>|</li>
					<li><a href="#"> Trung tâm dịch vụ</a></li>
					<li>|</li>
					<li><a href="#"> Viện nghiên cứu</a></li>
					<li>|</li>
					<li><a href="#"> Tạp chí KH&CN</a></li>
					<li>|</li>
					<li><a href="#"> Công ty Letco</a></li>
					<li>|</li>
					<li><a href="#"> Thư điện tử</a></li>
					<li>|</li>
					<li><a href="#"> Sitemap</a></li>
					<li>|</li>
					<li><a href="#"> Liên hệ</a></li>
					<li>|</li>
					<li><a href="#"> Giới thiệu</a></li>
					<li>|</li>
					<li><a href="#"> Tuyển sinh</a></li>
					<li>|</li>
					<li><a href="#"> Công ty thực tập</a></li>
				</ul>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a href="#" class="navbar-branch">
				<img src="Assets/Frontend/images/logo.png" height="75">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>					
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown">Giới thiệu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tuyển sinh</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Đào tạo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Khoa học công nghệ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hợp tác đối ngoại</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sinh viên</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">EGOV</a>
					</li>    
				</ul>
			</div>
			
		</div>
		
	</nav>
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1" ></li>
			<li data-target="#slides" data-slide-to="2" ></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="Assets/Frontend/images/banner.jpg">
			</div>
			<div class="carousel-item">
				<img src="Assets/Frontend/images/banner1.jpg">
			</div>
			<div class="carousel-item">
				<img src="Assets/Frontend/images/banner2.jpg">
			</div>
		</div>
		<a class="carousel-control-prev" href="#slides" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#slides" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<div class="container">
		<div class="row text-center padding">
			<div class="col-12" style="padding: 25px;color: blue;">
				<h2>&mdash;Tin Tức&mdash;</h2>
				<hr class="my-1">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #dddddd;">
		<div class="row text-center padding">
			<div class="col-9">
				<div class="row text-center padding">
					<?php
					foreach($data as $new):?>
						<div class="col-4" style="padding-top: 20px;">
							<img style="width: 95%" class="img-responsive" src="Assets/Upload/News/<?php echo $new->img; ?>"><a href="#"><?php echo $new->name; ?></a>
						</div>
					<?php endforeach ?>
				</div>
				
			</div>
			<div class="col-3">
				<div class="row text-center	padding">
					<h4 style="text-align: center;padding:auto;font-style: italic">Tin tiêu điểm</h4>
					<img class="col-12" src="Assets/Frontend/images/haui-tv.jpg">
				</div>
				<div class="row text-center padding" style="padding-top: 50px;">
					<h4 style="text-align: center;padding: auto;font-style: italic">Video giới thiệu</h4>
					<iframe style="padding-left: 15px;" width="320" height="260" src="https://www.youtube.com/embed/mpIyV4xFf2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="row text-center padding" style="padding-top: 50px;">
					<h4 style="text-align: center;padding: auto; font-style: italic">Góc Nhìn HaUI</h4>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
				</div>
			</div>
		</div>
		<hr>
	</div>
	<div class="container">
		<div class="row text-center padding">
			<div class="col-12" style="padding: 25px;color: blue;">
				<h2>&mdash;Thông Báo&mdash;</h2>
				<hr class="my-1">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #dddddd;">
		<div class="row text-center padding">
			<div class="col-9">
				<div class="row text-center padding">
					<?php
					foreach($data as $new):?>
						<div class="col-4">
							<img style="width: 100%" class="img-responsive" src="Assets/Frontend/images/tin1.jpg"><a href="#"><?php echo $new->name; ?></a>
						</div>
					<?php endforeach ?>
				</div>
				
			</div>
			<div class="col-3">
				<div class="row text-center	padding">
					<h4 style="text-align: center;padding:auto;font-style: italic">Tin tiêu điểm</h4>
					<img class="col-12" src="Assets/Frontend/images/haui-tv.jpg">
				</div>
				<div class="row text-center padding" style="padding-top: 50px;">
					<h4 style="text-align: center;padding: auto;font-style: italic">Video giới thiệu</h4>
					<iframe style="padding-left: 15px;" width="320" height="260" src="https://www.youtube.com/embed/mpIyV4xFf2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="row text-center padding" style="padding-top: 50px;">
					<h4 style="text-align: center;padding: auto; font-style: italic">Góc Nhìn HaUI</h4>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a>
					<a href="#" style="padding-left: 20px;">» Giảng viên khoa Quản lý Kinh doanh với hoạt động thực tế doanh nghiệp</a> 
				</div>
			</div>
		</div>
		<hr>
	</div>
	<div class="container-fluid padding">
		<div class="row text-center padding"> 
			<div class="col-4 solid padding">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4427.969612079284!2d105.73377967731288!3d21.054131311638955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1572970880755!5m2!1svi!2s" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="col-7 solid padding text-center">
				<ul>
					<li>Cở sở 1: Số 298 đường Cầu Diễn, quận Bắc Từ Liêm, Hà Nội</li>
					<li>Cơ sở 2: Phường Tây Tựu, quận Bắc Từ Liêm, Hà Nội</li>
					<li>Cơ sở 3: Phường Lê Hồng Phong, thành phố Phủ Lý, Hà Nam</li>
					<li>Điện thoại : +84 243 765 5121</li>
					<li>Email: dhcnhn@haui.edu.vn</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid padding"; style="background-color:rgb(0,128,255);">
	<div class="row text-center padding">
		<div class="col-12">
			<h3 style="color: white;">REACT,ANGULAR,CSS</h3>
		</div> 
		<div class="col-12 solid padding">
			<a href="#"><i class="fab fa-react icon" style="color:#81D8F7;"></i></a>
			<a href="#"><i class="fab fa-angular icon" style="color:rgb(177,43,55);"></i></a>
			<a href="#"><i class="fab fa-css3 icon" style="color:#D76537;"></i></a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row text-center padding" style="background-color: rgb(0,0,160);">
		<div class="col-12">
			<p style="color: white;">Copyright © 2018 Đại Học Công Nghiệp Hà Nội</p>
		</div>
	</div>
</div>
</body>
</html>