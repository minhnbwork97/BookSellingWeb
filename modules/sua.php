

<div class="col-md-12"></div>
<div class="container" >
<?php

$user=$_SESSION['user'];
//$link = mysqli_connect ("localhost", "root", "","bookmarket") or die("Khong ket noi duoc MySQL Database");
//mysqli_set_charset($link, "utf8");
$stSQL ="select * from user_seller where user='".$_SESSION['user']."'"; 

$result = mysqli_query($link,$stSQL);
$row = mysqli_fetch_array ($result);
?>

<br>
<div class="container">
	<div id="form" class ="col-lg-4" style="background-color:lavender;" >
    
    <h3 align="center">Username:  <b><?php echo $user ?></b></h3>
    
    
    <form action="" method="post" enctype="multipart/form-data">
    
    	<input type="file" id="profile-image-upload" class="hidden"  name="ava">
		<div id="profile-image" style="cursor: pointer;" title="Thay ảnh đại diện" data-toggle="tooltip" align="center">
        <img src= "admin/qlsach/ava/<?php if(!empty($row['ava'])) echo $row['ava']; else echo 'default1.PNG'; ?>" class="img-circle" style="max-width:150px; max-height:150px">
        <br>
        <label class="label label-primary " >Ảnh đại diện</label>       
        </div>
        
        <br><div align="center">
        <input type="submit" class="btn btn-danger" value="Xóa ảnh đại diện" name="deleteAva" style="height:30px"> 
        </div>  
    	<br><br>

        <label class="label label-default " >Họ Tên</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control"  required/>
        
		<label class="label label-default " >Số điện thoại</label>
		<input type="tel" name="phone" value="<?php echo $row['phone']; ?>"  class="form-control" placeholder="Số điện thoại" maxlength="11"  required/>
        
        <label class="label label-default " >Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Email" required/>
        
          <label class="label label-default " >Khu vực</label>
          <select name = "city" class="form-control">
					<?php

		
					$select ="select * from city";
					$doSelect = mysqli_query($link, $select);
					
					while ($row1 = mysqli_fetch_array ($doSelect)){
						 ?>
						<option value = "<?=$row1['id_city']?>" <?php if($row1['id_city']==$row['city_id_city']) echo 'selected' ?> ><?=$row1['name_city']?></option>
						<?php
					}
					?>
				</select>
                
        <label class="label label-default " >Địa chỉ</label>
        <input type="text" name="address" value="<?php echo $row["address"]; ?>" class="form-control" placeholder="Điền địa chỉ" required/> 
        
        <br>
        <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary" style="width:100%"/>
	
    </form>
            
            
	</div>
</div>


<?php



if(isset($_POST['submit'])){
	
	$ava 	  = $_FILES['ava']['name'];	
	$email    = $_POST["email"];
	$name     = $_POST["name"];
	$address  = $_POST["address"];
	$phone    = $_POST["phone"];
	$city     = $_POST["city"];
	
	if (!empty($ava)){
		
		

		//Thêm ảnh mới
		
		$ava = $_FILES['ava']['name'];
		$tmp_name = $_FILES['ava']['tmp_name'];
		$explode = explode('.',$ava);
		$ext = end($explode); 
		$avaName = $explode[0].time().'.'.$ext;
		$target ="admin/qlsach/ava/".basename($avaName);
		
		if(move_uploaded_file($tmp_name,$target)){
			//Xóa ảnh cũ
			$path = "admin/qlsach/ava/".$row['ava'];
			unlink($path);
			$sql2="UPDATE user_seller SET
				      ava    = 	'".$avaName."'
				WHERE user   =	'".$user."'";
		
			$result2 = mysqli_query($link,$sql2);
			//move_uploaded_file($tmp_name,$target);
		}

	}
	
	$sql1="UPDATE user_seller SET
		email  =	'".$email."',
		name   =	'".$name."',
		address=	'".$address."',
		city_id_city = '".$city."',
		phone  =	'".$phone."'
		WHERE user   =	'".$user."'";

	$result1 = mysqli_query($link,$sql1);
	
	
	
	if($result1){
		header('Location:'.$_SERVER['REQUEST_URI'].'');
		echo '<script language="javascript">';
		echo 'alert("Sửa thành công")';
		echo '</script>';

	
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Lỗi truy vấn")';
		echo '</script>';
		
	}
}


if(isset($_POST['deleteAva'])){
	$path = $_SERVER['DOCUMENT_ROOT']."/bansach/admin/qlsach/ava/".$row['ava'];
		unlink($path);
	$sql3="UPDATE user_seller SET
			  ava    = 	''
		WHERE user   =	'".$user."'";
	
	$result3 = mysqli_query($link,$sql3);
	header('Location:'.$_SERVER['REQUEST_URI'].'');
}
?>
</div>