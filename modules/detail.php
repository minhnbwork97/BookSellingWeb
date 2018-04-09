<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="webstyle.css" />
<link rel="stylesheet" href="detail.css"/>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="login.js"></script>
</head>

<body>

  <header class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#"><img src="bookshop.png"></a> </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="#
            "><b id="homes">Home</b></a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Portfolico</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact us</a></li>
            <li>
              <button class="btn btn-primary" data-toggle="modal" data-target="#login" name="btn_login" id="btn_login">login</button>
            </li>
            <li>
              <button class="btn btn-primary" data-toggle="modal" data-target="#register" name="btn_resgiter" id="btn_resgiter">Register</button>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </header>

<div class="row">
<div class = "col-lg-3 col-md-3 col-sm-12 col-xs-12  hidden-xs hidden-sm">

 
<form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     
  </form>

<ul class="nav nav-pills nav-stacked">
<h3>Danh Mục</h3>
	<li ><a href="#" class="list-group list-group-item list-group-item-success" >Tiểu thuyết</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Truyện ngắn</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Truyện dài</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Khoa học viễn tưởng</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Văn hóa xã hội</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Lịch sử</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Truyện thiếu nhi</a></li>
    <li ><a href="#" class="list-group list-group-item list-group-item-success" >Khác</a></li>
</ul>

</div>

<div class="col-sm-12 col-md-9 col-lg-9">
    		<!-- product -->
			<div class="product-content product-wrap clearfix product-deatil">
				<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-12 ">
							<div class="product-image"> 
								<div id="myCarousel-2" class="carousel slide">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
									<li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
									<li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
								</ol>
								<div class="carousel-inner">
									<!-- Slide 1 -->
									<div class="item active">
										<img src="https://lorempixel.com/300/300/technics/1/" alt="">
									</div>
									<!-- Slide 2 -->
									<div class="item">
										<img src="https://lorempixel.com/300/300/technics/1/" alt="">
									</div>
									<!-- Slide 3 -->
									<div class="item">
										<img src="https://lorempixel.com/300/300/technics/1/" alt="">
									</div>
								</div>
								<a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
								<a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-12 col-xs-12">
					
						<h2 class="name">
							Tên Sản Phẩm 
							<small>Người bán </small>
							
						
						</h2>
						<hr>
						<h3 class="price-container">
							$129.54
							<small>VND</small>
						</h3>
						<div class="certified">
							<ul>
								<li><a href="javascript:void(0);">Thể Loại<span>Âm Nhạc</span></a></li>
								<li><a href="javascript:void(0);">Tác Giả<span>Thúy Kiều</span></a></li>
                                <li><a href="javascript:void(0);">Tình Trạng Sách<span>Mới</span></a></li>
                                 <li><a href="javascript:void(0);">Số Sách<span> 5 </span></a></li>
							</ul>
						</div>
						<hr>
						<div class="description description-tabs">
							<ul id="myTab" class="nav nav-pills">
								<li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Product Description </a></li>
								<li class=""><a href="#specifications" data-toggle="tab">Specifications</a></li>
								<li class=""><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
								<div class="tab-pane fade active in" id="more-information">
									<br>
									<strong>Description Title</strong>
									<p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
								</div>
								<div class="tab-pane fade" id="specifications">
									<br>
									<dl class="">
											<dt>Gravina</dt>
	                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
	                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
	                                        <dd>Eget lacinia odio sem nec elit.</dd>
	                                        <br>

	                                        <dt>Test lists</dt>
	                                        <dd>A description list is perfect for defining terms.</dd>
	                                        <br>	

	                                        <dt>Altra porta</dt>
	                                        <dd>Vestibulum id ligula porta felis euismod semper</dd>
	                                    </dl>
								</div>
								
						<hr>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
									<a href="javascript:void(0);" class="btn btn-success btn-lg">Liên Hệ Người bán</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
</div>
</div>
</div>
</div>
<footer class="footer1">
<div class="container-fluid">

<div class="row"><!-- row -->
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                                	<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Regular Batch</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test & Discussion</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Fast Track T & D</a></li>
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
 									<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test Series Schedule</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Postal Coaching</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  PG Dr. Bhatia Books</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  UG Courses</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Satellite Education</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Study Centres</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  State P.G. Mocks</a></li>
                                    <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>
                                    
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
 				<li><a href="#"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Admission Form</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>  Computer Live Test</a></li>

                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">Webenlance Pvt. Ltd.</h2>
                                <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@webenlance.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(8AM to 10PM):</b>  +91-8130890090, +91-8130190010  </p>
    
    <p><b>Corp Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>7042827160, </p>
    <p> 011-27568832, 9868387223</p>
                                </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="nomargin">
                                    
                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                    		</li>
                          </ul>
                       </div>
                </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright">

					© 2015, Webenlance, All rights reserved

				</div>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="design">

					 <a href="#">Franchisee </a> |  <a target="_blank" href="http://www.webenlance.com">Web Design & Development by Webenlance</a>

				</div>

			</div>

		</div>

	</div>



</body>
</html>