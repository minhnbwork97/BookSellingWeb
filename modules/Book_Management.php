<link rel="stylesheet" type="text/css" href="form.css">
<script src="form.js"></script>
		<?php

		if(isset($_GET['tenuser']))
		{
			$userSell=$_GET['tenuser'];
			?>  
			<?php
		}
		?>
<br>
<div class="row">
<div id="form" class = "col-lg-3 container-fluid" style="background-color:lavender; margin-left:5%;" >

        <form action="" method="post" enctype="multipart/form-data">
        <h3 align="center">Xin chào :<b> <?php echo $userSell ?></b></h3> 
         <label class="label label-default " >Tên Sách</label>
         <input type="text" class="form-control" name="bname" required>
         
         <label class="label label-default ">Thể Loại</label>
         <input type="text" class="form-control" name="type" required>
         
         <label class="label label-default ">Tác Giả</label>
         <input type="text" class="form-control" name="author" required>
         
         <label class="label label-default ">Giá</label>
         <input type="number" class="form-control" name="price" placeholder="VND" min="0" required>
         
         <label class="label label-default ">Tình Trạng</label>
         <select name="status" class="form-control">
							<option value=""></option>
							<option value="new">mới</option>
							<option value="old">cũ</option>
							<option value="normal">bình thường</option>
		</select>
       
         <label class="label label-default ">Nội dung</label>
         <textarea name="describe" rows="4" placeholder="Viết gì đó về cuốn sách này" class="form-control"></textarea>
         
         <label class="label label-default ">Số Lượng</label>
         <input type="number" class="form-control" name="number" min="1" max="100" required>
         
         <label class="label label-default ">Chọn ảnh</label>
         <input type="file" name="image[]" value="Chọn ảnh" multiple class="form-control " >
         <br/>
         <button type="submit" name="AddBook" class="btn btn-primary" style="width:100%">Thêm Sách</button> 
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
	
	$stAdd = "insert into `book` (`name_book`, `category_book`, `author_book`, `price_book`, `status_book`, `number_book`, `user_seller_user`, `describe_book`)  values('".$bname."','".$type."','".$author."','".$price."','".$status."','".$number."','".$userSell."', '".$describe."')";
	$doAdd = $link->query($stAdd);
	$stSelectID = "SELECT LAST_INSERT_ID() as `ID`";
	$doSelectID = $link->query($stSelectID);
	$row = mysqli_fetch_array($doSelectID);
	$id = $row['ID'];
	
			//lấy nhiều ảnh
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
				$doAddImage = $link->query($stAddImage);
				$done = "SET FOREIGN_KEY_CHECKS = 1";
				$doDone = mysqli_query($link,$done);
				header('Location:'.$_SERVER['REQUEST_URI'].'');
		}
		else{
			echo "Upload thất bại";
		}
		
	}
}

?>



<div class="container" >

 <div class="col-md-8 " style="float:right">
  
<ul id="myTab" class="nav nav-pills">
            <li class="active"><a href="#picView" data-toggle="tab" class="no-margin">Khung</a></li>

            <li class=""><a href="#tableView" data-toggle="tab">Bảng</a></li>
</ul>

<div class="tab-content" >
<br>

      <div class="tab-pane fade active in" id="picView">
        <?php
        $strSQL = "select count(*) from book where user_seller_user = '$userSell'";
        $result = mysqli_query($link,$strSQL);
        $row=mysqli_fetch_array($result);
        $totalbook = $row[0]; 
        $n=3;
		//if($totalbook>$n)
        	$totalpage = ceil($totalbook/$n);
		//else if($totalbook<$n)
			//$totalpage = floor($totalbook/$n);
        if(isset($_GET['trang'])){
          $page=$_GET['trang'] ; 
        }
        else{
          $page='';
        }
        if($page==''|| $page==1){
          $firstrow=0;    
        }else{
          $firstrow =($page-1)*$n;  
    
        }
    
        $stSQL="SELECT * FROM book  where `user_seller_user` = '".$userSell."' ORDER BY `id_book` DESC Limit {$firstrow},{$n} ";
        $query=mysqli_query($link,$stSQL);
        
        ?>
    
      <?php
    
      while($row=mysqli_fetch_array($query)) { 
      $stSQL2="SELECT * FROM image_book  where `book_id_book` = '".$row['id_book']."' Limit 1";
      $query2=mysqli_query($link,$stSQL2);
      $row2 = mysqli_fetch_array($query2); ?>
    
      <div class="col-md-4 ">
        <div class="thumbnail " style="height: 77% ;" > <a href="index.php?page=Book_Update&id=<?php echo $row['id_book'] ?>"><img src="admin/qlsach/img/<?php echo $row2['link_image']?>" width="150" height="150"  alt="Thin"/></a>
          <div class="caption">
            <h3><font size="+1"><a href="index.php?page=Book_Update&id=<?php echo $row['id_book'] ?>"><?php echo $row['name_book']?>
        </a></font></h3>
            <h5 style="bottom:25%;position: absolute;"><?php echo $row['author_book']?></h5>
            <h5 style="bottom:20%;position: absolute;"><?php echo "Người bán : <a href='index.php?page=profile&id=".$row['user_seller_user']."'>".$row['user_seller_user']?></a></h5>
            <p style="bottom: 50px;position: absolute;">
             <a href="index.php?page=Book_Update&id=<?php echo $row['id_book'] ?>" class="btn btn-info" role="button">Sửa</a>
              <a href="index.php?page=Book_Delete&id=<?=$row['id_book'] ?>" class="btn btn-info" role="button" onClick="return confirm('Bạn có chắc chắn muốn xóa tin này?')" >Xóa</a> 
             </p>
            </div>
          </div>
        </div>
    
        <?php
      }
      ?>
      <div class="col-md-9" >

<?php 
		if($totalpage>1)
		for($i=1; $i<=$totalpage; $i++ ) { 
?> 
      		<a style="font-size:20px" href="index.php?page=Book_Management&tenuser=<?=$userSell?>&trang=<?=$i?>">  
                <button class="btn btn-primary btn-sm" <?php if(isset($_GET['trang'])) if($_GET['trang']==$i) echo 'disabled';  ?> ><font style="font-size:17px;">
                    <b><?=$i?></b></font>
                </button>   
            </a>
<?php
    	} 
?>
      </div>
    </div>

  
  
<div class="tab-pane fade" id="tableView">
  <table class="table table-bordered" >
	<tr class="active">
		<th width="10%"><b>Mã Sách</b></th>
		<th width="10%"><b>Tên Sách</b></th>
		<th width="10%"><b>Thể Loại</b></th>
		<th width="10%"><b>Giá Sách</b></th>
		<th width="10%"><b>Tình Trạng</b></th>
		<th width="10%"><b>Tác Giả</b></th>
        <th width="10%"><b>Số Lượng</b></th>
        <th width="20%" colspan="2"><p align="center"><b>Quản lý</b></p></th>

        
	</tr>
	<?php
	$stSelectBook = "select * from `book` where `user_seller_user` = '".$userSell."' ";
	$doSelectBook = $link->query($stSelectBook);
	while($row=mysqli_fetch_assoc($doSelectBook)){
		?>	

		<tr valign="top" >
			<td ><?=$row["id_book"] ?></td>
			<td ><?=$row["name_book"] ?></td>
			<td ><?=$row["category_book"] ?></td>
			<td ><?=$row["price_book"] ?></td>
			<td ><?=$row["status_book"] ?></td>
			<td ><?=$row["author_book"] ?></td>
            <td ><?=$row["number_book"] ?></td>
            
			<td ><a href="index.php?page=Book_Update&id=<?= $row['id_book']?>">Sửa</a></td>
			<td ><a href="index.php?page=Book_Delete&id=<?= $row['id_book']?>" onClick="return confirm('Bạn có chắc chắn muốn xóa tin này?')">Xóa</a></td>
		</tr>

		<?php
	}

	?>
</table>
</div>

		</div>
  
  </div>
  </div>
</div>



