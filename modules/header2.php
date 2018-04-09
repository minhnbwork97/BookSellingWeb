<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
.header {
	background: #f1f1f1 none repeat scroll 0 0;
}
.menu {
	background: #34495e none repeat scroll 0 0;
	display: block;
	float: left;
	width: 100%;
}


ul.menu_head {
	display: block;
	list-style: outside none none;
	margin: 0 auto;
	width: 100%;
}
body {
	background:black ;
	font-family: arial;
	font-size: 13px;
}
.menu_head>li {
	width: 14.287%;
	display: inline-block;
	float: left;
}
.menu_head h2 a {
	color: #fff;
	display: block;
	font-size: 13px;
	padding: 10px;
	text-decoration: none;
}
.menu_head h2 a:hover {
	background: rgba(0, 0, 0, 0.2) none repeat scroll 0 0;
}

.sub-menu{
	display: none;
	position: absolute;
}

.sub-menu li a{
	text-decoration: none;
	display: block;
	color: #000;
	background-color: #34495e;
}
li:hover .sub-menu{
	display: block;
}
ul li:hover a{
	color: white;
}


</style>
<body>
	


	<div class="header"> 
		<div class="menu"> 
			<ul class="menu_head">
				<li><h2><a href=""><img style="margin-top: 30%;" class="img-responsive" width="100%" src="img/logo.png"></a></h2></li>
				<li><h2><a href="index.php"><b>Trang Chủ</b></a></h2></li>
				<li><h2><a href="index.php?page=gioithieu">Giới Thiệu</a></h2></li>
				<li><h2><a href="index.php?page=giaodich">Giao Dịch</a></h2></li>
				<li><h2><a href="index.php?page=dichvu">Dịch Vụ</a></h2></li>
				<li><h2><a href="index.php?page=lienhe">Liên Hệ</a></h2></li>
				<li><h2><a href=""><img class="img-responsive" width="100%" src="img/dropdown.png"></a></h2>
					<ul class="sub-menu" style="font-size:90% ;" >
						<li><a href="">Đăng nhập</a></li>
						<li><a href="">Đăng ký</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>