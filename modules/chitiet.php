<head>
  <style>.carousel-inner > .item > img { width:100%; height:500px; } </style>
</head>
<link rel="stylesheet" href="webstyle.css" />
<?php

if(isset($_GET['id'])){
 $id=$_GET['id'];	
}
?>
<?php

$stSQL="SELECT * FROM book WHERE id_book={$id}";
$query=mysqli_query($link,$stSQL);
$row=mysqli_fetch_array($query);
//$selectImg = "select `link_image` from `image_book` where `book_id_book` = '".$row['id_book']."'";
//$doSelectImg = mysqli_query($link,$selectImg);

include('modules/menu.php');
?>





<div class="col-sm-12 col-md-9 col-lg-7" style="float:right; margin-right:100px">
  <!-- product -->
  <div class="product-content product-wrap clearfix product-deatil">
    <div class="row">
      <div class="col-md-5 col-sm-12 col-xs-12 ">
        <div class="product-image"> 
          <div id="myCarousel-2" class="carousel slide">
            <?php
           echo '<div class="carousel-inner">';
			$a = 1;
			$stSelectBookPic = "select * from image_book where book_id_book = {$id}"; 
			$doSelectBookPic = $link->query($stSelectBookPic);
			while($row2 = mysqli_fetch_array($doSelectBookPic)){
				 if($a == 1){
					echo '<div class="item active">
						<img src="admin/qlsach/img/'.$row2['link_image'].'" alt="pic'.$a.'"> 		
					</div>';
				 }
				 else if($a > 1){
					echo '<div class="item"> 
						<img  src="admin/qlsach/img/'.$row2['link_image'].'" alt="pic'.$a.'"> 
					</div>';						
				 }
				 $a++;
			}
           echo '</div>';
		   ?>
            <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
            <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">

        <h2 class="name">
          Tên Sách :<?php echo $row['name_book'] ?>
          <br/>
          <small>Người bán : <?php echo "<a href='index.php?page=profile&id=".$row['user_seller_user']."'>".$row['user_seller_user']?></a></small>


        </h2>
        <hr>
     
        <h3 class="price-container">Giá :
          <?php echo $row['price_book'] ?>
          <small>VND</small>
        </h3>
        <div class="certified">
          <ul>
            <li><b>Thể Loại: </b><a href="index.php?page=danhmuc&id=<?php echo $row['category_book'] ?>"><span><?php echo $row['category_book'] ?></span></a></li>
            <li><b>Tác Giả:	</b><span><?php echo $row['author_book'] ?></span></li>
            <li><b>Tình Trạng Sách:	</b><span><?php echo $row['status_book'] ?></span></li>
            <li><b>Số Lượng:	</b><span><?php echo $row['number_book']?></span></li>
          </ul>
        </div>
        <hr>
           <div class="col-sm-12 col-md-6 col-lg-6">
               <a href="index.php?page=profile&id=<?= $row['user_seller_user'] ?>" class="btn btn-success btn-lg">Liên Hệ Người bán</a>
           <div class="description description-tabs">
          <ul id="myTab" class="nav nav-pills">
            <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Giới thiệu </a></li>
            <!--<li class=""><a href="#specifications" data-toggle="tab">Specifications</a></li>-->
            
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="more-information">
              <br>
              <?php echo $row['describe_book'] ?>
            </div>
              <br>
              

            <hr>
      
          </div>
     </div>
        
        </div>
      </div>
    </div>
  </div>
</div>


