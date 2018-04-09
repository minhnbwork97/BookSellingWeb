<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="support/css/bootstrap.css" />
  <script src="support/jquery-3.2.1.min.js"></script>
  <script src="support/js/bootstrap.js"></script>
  <title>Quản Lý</title>
  <?php 
	session_start();
  if(isset($_GET['tenadmin']))
  {
    $tenadmin=$_GET['tenadmin'];
    ?>  <h3>Xin chào ADMIN: <?php echo $tenadmin ?></h3> 
    <?php
  }
				$link=mysqli_connect("localhost","root","","bookmarket");
				mysqli_set_charset($link,"UTF8");
 
				if(isset($_POST["AddBook"])){
					$bname = $_POST["bname"];
					$type = $_POST["type"];
					$author = $_POST["author"];
					$price = $_POST["price"];
					$status = $_POST["status"];
					$number = $_POST["number"];
					$stAdd = "insert into `book` (`name_book`, `category_book`, `author_book`, `price_book`, `status_book`, `number_book`, `user_seller_user`)  values('".$bname."','".$type."','".$author."','".$price."','".$status."','".$number."','".$userSell."')";
					$doAdd = $link->query($stAdd);

					$stSelectID = "SELECT LAST_INSERT_ID() as `ID`";
					$doSelectID = $link->query($stSelectID);
					while($row = mysqli_fetch_array($doSelectID))
						$id = $row['ID'];


					echo '<div id="alertSuccess" onClick="disapear("$alertSuccess")">';
					echo ' <h4>Đã thêm '.$bname.'</h4>';	
					echo 'Mã sách là '. $id;

	//lấy nhiều ảnh
					foreach($_FILES['image']['name'] as $i =>$name){
						$name = $_FILES['image']['name'][$i];
						$type = $_FILES['image']['type'][$i];
						$size = $_FILES['image']['size'][$i];
						$tmp_name = $_FILES['image']['tmp_name'][$i];
						$explode = explode('.',$name);
						$ext = end($explode); 
						$thongbao = array();
						$picName = $explode[0].time().'.'.$ext;
		$target = "images/".basename($picName);// link lưu ảnh
		if(empty($tmp_name)){
			echo $thongbao[] = 'hãy chọn 1 ảnh';
		}
		else{
			$chophep = array('jpeg','jpg','png','gif','bmp');
			$maxsize = 400000;
			if(in_array($ext,$chophep)===false){
				echo $thongbao[]='File không hợp lệ';
			}
			if($size > $maxsize){
				echo $thongbao[]='Kích thước file quá lớn';
			}
		}
		if(empty($thongbao)){
			if(move_uploaded_file($tmp_name,$target)){	
				//chèn tên ảnh vào csdl
				$stAddImage = "insert into `image_book` (`link_image`, `book_id_book`) values('".$picName."','".$id."')";
				$doAddImage = $link->query($stAddImage);

			}
			else{
				echo "Upload thất bại";
			}
		}		
	}
   
}
?>
</head>

<body>
  <div class="container-fluid">
   <header class="page-header">

     <h2 class="h2 text-primary text-center">Quản Lý Sách</h2><br>
	 <button class="btn btn-default" data-toggle="modal"  name="btn_login" ><a href="../../index.php"><b>Trang Chủ</b></a></button>
      <button class="btn btn-default" data-toggle="modal"  name="btn_login"><a href="../../modules/huysession.php"><b>Đăng Xuất</b></a></button>

   </header>
   <section class="container">
     <div class="row ">
      <div class="col-md-4 table-bordered">
        <form name="nhapkhoa" action="QuanLySach.php" method="post">
         <label class="label label-default " >Tên Sách</label>
         <input type="text" class="form-control" name="bname">
         <label class="label label-default ">Thể Loại</label>
         <input type="text" class="form-control" name="type">
         <label class="label label-default ">Tác Giả</label>
         <input type="text" class="form-control" name="author">
         <label class="label label-default ">Giá</label>
         <input type="text" class="form-control" name="price" placeholder="VND">
         <label class="label label-default ">Tình Trạng</label>
         <br>
         <select name="status" class=" dropdown">
							<option value=""></option>
							<option value="new">mới</option>
							<option value="old">cũ</option>
							<option value="normal">bình thường</option>
						</select>
         <br>
         <label class="label label-default ">Số Lượng</label>
         <input type="text" class="form-control" name="number">
         <label class="label label-default ">Chọn ảnh</label>
         <input type="file" name="image[]" value="Chọn ảnh" multiple class="form-control " >
         
         <button type="submit" name="AddBook" class="btn btn-sm">Thêm Sách</button> 
       </form>
     </div>

     <div class="col-md-8 ">
       <?php include('3.php');?>
     </div>

   </div>
 </section>
</div>
</body>
</html>