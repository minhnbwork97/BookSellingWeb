<head>
  <style>.carousel-inner > .item > img { width:100%; height:500px; } </style>
</head>
<br>

<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$stSQL="SELECT * FROM book WHERE id_book=".$id;
	$query=mysqli_query($link,$stSQL);
	$row=mysqli_fetch_array($query);

?>


<div class = "col-lg-3  col-md-3 col-sm-12 col-xs-12  hidden-xs hidden-sm container-fluid" style="background-color:lavender; margin-left:100px;">
		<h3 align="center"><b>SỬA SÁCH</b></h3>
        <form action="" method="post" enctype="multipart/form-data">
         <label class="label label-default " >Tên Sách</label>
         <input type="text" class="form-control" name="bname" value="<?=$row['name_book'] ?>">
         <label class="label label-default ">Thể Loại</label>
         <input type="text" class="form-control" name="type" value="<?=$row['category_book'] ?>">
         <label class="label label-default ">Tác Giả</label>
         <input type="text" class="form-control" name="author" value="<?=$row['author_book'] ?>">
         <label class="label label-default ">Giá</label>
         <input type="number" class="form-control" name="price" placeholder="VND" value="<?=$row['price_book'] ?>" min="0">
         <label class="label label-default ">Tình Trạng</label>

         <select name="status" class="form-control" id="staList" >
							<option value="" ></option>
							<option value="new" <?php if($row['status_book']=='new') echo ' selected="selected"'; ?> >mới</option>
							<option value="old" <?php if($row['status_book']=='old') echo ' selected="selected"';  ?> >cũ</option>
							<option value="normal" <?php if($row['status_book']=='normal') echo ' selected="selected"';  ?> >bình thường</option>
						</select>
			<script language="javascript">
				$("select[name=foo] option[value=<?=$row['status_book'] ?>").attr('selected','selected');
            </script>
            
         <label class="label label-default ">Nội dung</label>
         <textarea name="describe" rows="4" placeholder="Viết gì đó về cuốn sách này" class="form-control"><?=$row['describe_book'] ?></textarea>
         <label class="label label-default ">Số Lượng</label>
         <input type="number" class="form-control" name="number" value="<?=$row['number_book'] ?>">
         <label class="label label-default ">Chọn lại ảnh</label>
         <input type="file" name="image[]" value="Chọn ảnh" multiple class="form-control " >
         <br>
         <button type="submit" name="AddBook" class="btn btn-primary" style="width:100%">Sửa</button> 
       </form>
 </div>
 
 <?php 
	if(isset($_POST["AddBook"])){
		$bname = $_POST["bname"];
		$type = $_POST["type"];
		$author = $_POST["author"];
		$price = $_POST["price"];
		$status = $_POST["status"];
		$number = $_POST["number"];
		$describe = $_POST["describe"];
		foreach($_FILES['image']['name'] as $i =>$name){
			$name = $_FILES['image']['name'][$i];
		 }
		
		$stAdd = "UPDATE `book` SET `name_book` = '".$bname."', `category_book` ='".$type."', `author_book` = '".$author."',`price_book`='".$price."',`status_book`='".$status."',`number_book`='".$number."',`describe_book`= '".$describe."' WHERE id_book = ".$id;
		$doAdd = $link->query($stAdd);
		
		  if (  !empty( $name) ){
			 
			//Xóa ảnh cũ
			$stselect = "SELECT * FROM image_book WHERE book_id_book='".$id."'";
			$doSelectBookPic = mysqli_query($link,$stselect);		
			while($row = mysqli_fetch_array($doSelectBookPic)){
				$path = "admin/qlsach/img/".$row['link_image'];
				unlink($path);
			}
			$sql1 = "SET SQL_SAFE_UPDATES = 0";
			$sql2= "delete from image_book where book_id_book=".$id;
			$result1 = mysqli_query($link,$sql1);
			$result2 = mysqli_query($link,$sql2);
			if(!$result1 || !$result2){
				die('Truy vấn sai');
			}
			
			//Thêm ảnh mới
			foreach($_FILES['image']['name'] as $i =>$name){
				$name = $_FILES['image']['name'][$i];
				$tmp_name = $_FILES['image']['tmp_name'][$i];
				$explode = explode('.',$name);
				$ext = end($explode); 
				$picName = $explode[0].time().'.'.$ext;
				$target = "admin/qlsach/img/".basename($picName);// link lưu ảnh
		
				if(move_uploaded_file($tmp_name,$target)){	
						//chèn tên ảnh vào csdl	
					$pre = "SET FOREIGN_KEY_CHECKS = 0";
					$doPre = mysqli_query($link,$pre);
					$stAddImage = "insert into `image_book` (`link_image`, `book_id_book`) values('".$picName."','".$id."')";
					$doAddImage = mysqli_query($link,$stAddImage);
					$done = "SET FOREIGN_KEY_CHECKS = 1";
					$doDone = mysqli_query($link,$done);
					echo '<script>window.alert("Sửa thành công")</script>';

				}
				else{
					echo '<script>window.alert("Upload ảnh thất bại")</script>';
				}
				
			}
			
			
		}	
		header('Location:'.$_SERVER['REQUEST_URI'].'');	
	}
}

?>

 
 
 
 
 
<link rel="stylesheet" href="webstyle.css" />

<?php


//$selectImg = "select `link_image` from `image_book` where `book_id_book` = '".$row['id_book']."'";
//$doSelectImg = mysqli_query($link,$selectImg);
?>






  <!-- product -->
<div class="col-sm-12 col-md-9 col-lg-7" style="float:right; margin-right:100px">
<div class="product-content product-wrap clearfix product-deatil">
    <div class="row">
      <div class="col-md-5 col-sm-12 col-xs-12" >
        <div class="product-image"> 
          <div id="myCarousel" class="carousel slide">
            <?php
           echo '<div class="carousel-inner">';
			$a = 1;
			$stSelectBookPic = "select * from image_book where book_id_book = {$id}"; 
			$doSelectBookPic = $link->query($stSelectBookPic);
			while($row2 = mysqli_fetch_array($doSelectBookPic)){
				 if($a == 1){
					echo '<div class="item active" >
						<img src="admin/qlsach/img/'.$row2['link_image'].'" alt="pic'.$a.'" > 
					</div>';
				 }
				 else if($a > 1){
					echo '<div class="item" > 
						<img src="admin/qlsach/img/'.$row2['link_image'].'" alt="pic'.$a.'" > 
					</div>';						
				 }
				 $a++;
			}
           echo '</div>';
		   
		   ?>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
          </div>
        </div>
      </div>
      
      
      <div class="col-md-7" >
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
        </div>
       </div>
       </div>
        </div>   
        </div> 
</div>


