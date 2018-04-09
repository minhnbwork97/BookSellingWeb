
<link rel="stylesheet" href="../support/css/bootstrap.css">

<?php 

include('admin/module/config.php');
if(isset($_SERVER['REQUEST_METHOD'])=='POST'){

$errors_num = '';
$errors_len = '';
$errors_id = '';
$errors_phone = '';
$err_id_contain_bw = '';
$err_addr_contain_bw = '';
$err_email_contain_bw = '';
$errors_checkpass = '';
$banned_id = array("DROP","drop","ALTER","alter","DELETE","delete"," ");
$banned = array("DROP","drop","ALTER","alter","DELETE","delete");

if(isset($_POST['username'])) {
    foreach ($banned_id as $bw) {
        if (stripos($_POST['username'],$bw) !== false) {
		   $err_id_contain_bw = 'Không được chứa khoảng trắng hoặc các kí tự DROP, ALTER, DELETE...';

        }
    }
}
if(isset($_POST['address'])) {
    foreach ($banned as $bw) {
        if (stripos($_POST['address'],$bw) !== false) {
		   $err_addr_contain_bw= 'Không được chứa các kí tự DROP, ALTER, DELETE...';

        }
    }
}

if(isset($_POST['email'])) {
    foreach ($banned as $bw) {
        if (stripos($_POST['email'],$bw) !== false) {
		   $err_email_contain_bw = 'Không được chứa các kí tự DROP, ALTER, DELETE...';
        }
    }
}

}

if(isset($_POST['username'])) {
if(strlen($_POST['username']) < 6 ) {
$errors_id= "Tên đăng nhập phải dài ít nhất 6 kí tự!";
}
else $username = $_POST['username'];
}
if(isset($_POST['pass'])) {
if(strlen($_POST['pass']) < 6){
$errors_len = "Mật khẩu phải có trên 6 kí tự!";
}
if(isset($_POST['check_pass'])) {
if($_POST['check_pass'] != $_POST['pass']) {
		$errors_checkpass = 'Không trùng khớp';
		}	
	
}

$number = preg_match('@[0-9]@', $_POST['pass']);
if(!$number){
$errors_num= "Mật khẩu phải chứa ít nhất 1 chữ số!";
}
else{	
$pass=md5($_POST['pass']);
}
}

if(isset($_POST['phone'])) {
$err_phone = preg_match('/^[0-9]+$/',$_POST['phone']);
if(!$err_phone || strlen($_POST['phone'])<10 || strlen($_POST['phone'])>11 ) {
$errors_phone = "Không đúng định dạng số điện thoại!";		 	

}
else  {
$phone=$_POST['phone'];

}

}

if(empty($_POST['address'])){
$errors='address';	
}
else{
$address=$_POST['address'];
}
if(empty($_POST['name'])){
$errors='name';	
}
else{
$name=$_POST['name'];
}
if(empty($_POST['email'])){
$errors='email';	
}
else{
$email=$_POST['email'];
}
if(empty($_POST['city_id_city'])){
$errors='city_id_city';	
}
else{
$city_id_city=$_POST['city_id_city'];
}

if(empty($errors) && empty($errors_len) && empty($errors_num) && empty($errors_phone) && empty($errors_id) && empty($err_id_contain_bw) && empty($err_address_contain_bw) && empty($err_email_contain_bw) && empty($errors_checkpass)){
$sql="SELECT user FROM user_seller WHERE user='$username' ";
$run=mysqli_query($link,$sql);
if(mysqli_num_rows($run)==1){
echo "<script>alert('Tài khoản đã tồn tại mời bạn tạo tài khoản khác!');</script>";
}
else{
$query="INSERT INTO user_seller(user,pass,email,name,address,phone,city_id_city) VALUES ('$username','$pass','$email','$name','$address','$phone','$city_id_city')";
$results=mysqli_query($link,$query) or die("Quyery{$query} \n <br/> Mysql errors:".mysqli_error($link));
$num=mysqli_affected_rows($link);
if($num==1){
				?>
                <script language="javascript">alert("Đăng ký thành công");location="index.php?page=dangnhap";</script>
			<?php
			}
else if($num==0) {?>
		 <script language="javascript">alert("Đăng ký thất bại");location="index.php?page=dangky";</script>
        <?php
	}
			
}

$_POST['username']='';
$_POST['pass']='';
$_POST['phone']='';
$_POST['address']='';
$_POST['email']='';
$_POST['name']='';
$_POST['city_id_city']='';
}

?>
<body>
	
	<form name="signin" method="post" enctype="multipart/form-data" id = "submit" action="">
		<?php
		if(isset($a)){
		echo $a;	
	}

	?>
	
	<table   class="table table-condensed" style="font-size:22px; width:30%; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;" border="0" align="center">
		<tr class = "active">
			<th style=" color:black; font-size: 28px;" height="90" colspan="2" scope="col"><div align="center">TRỞ THÀNH NGƯỜI BÁN</div></th>
		</tr>
		<tr class = "active">
			<td width="367" height="70"><div align="center">Tên đăng nhập</div></td>
			<td width="363"><input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username'];} ?>" style=" font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền tên đăng nhập từ 6 kí tự trở lên" required/>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $errors_id; ?></p></span>
                <span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_id_contain_bw; ?></p></span>
			</td>
		</tr>
		<tr class = "active">
			<td height="68"><div align="center">Mật khẩu</div></td>
			<td><input type="password" name="pass" id = "pass" value="<?php if(isset($_POST['pass'])){ echo $_POST['pass'];} ?>"  style=" font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền mật khẩu từ 6 kí tự"   required/>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $errors_len; ?></p></span>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $errors_num ?></p></span>
			</td>
		</tr>
        <span class = "error"><p id = "pass_error"></p></span>
        
        <tr class = "active">
			<td height="68"><div align="center">Nhập lại Mật Khẩu</div></td>
			<td><input type="password" name="check_pass" id = "check_pass"   style=" font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền mật khẩu từ 6 kí tự"   required/>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $errors_checkpass ?></p></span>
			</td>
		</tr>
		
		<tr class = "active">
			<td width="367" height="70"><div align="center">Họ và tên</div></td>
			<td width="363"><input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>" style=" font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền họ và tên" required/>

			</td>
			
		</tr>
		<tr class = "active">
			<td height="67"><div align="center">Số điện thoại</div>
			</td>
			<td><input type="tel" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone'];} ?>" style="font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền số điện thoại" maxlength="11" required/>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $errors_phone; ?></p></span>
			</td>
			
		</tr>
		<tr class = "active">
			<td height="77"><div align="center">Email</div></td>
			<td><input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" style="font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền Email"/>
            <span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_email_contain_bw; ?></p></span>
			</td>
		</tr>
        <tr class = "active">
			<td height="70"><div align="center">Địa chỉ</div></td>
			<td><input type="text" name="address" value="<?php if(isset($_POST['address'])){ echo $_POST['address'];} ?>" style=" font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền địa chỉ" />
            <span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_addr_contain_bw; ?></p></span>
			</td>
		</tr>
		<tr class = "active">
			<td height="77"><div align="center">Khu vực</div></td>
			<td>
				
				<select name = "city_id_city" value="<?php if(isset($_POST['city_id_city'])){ echo $_POST['city_id_city'];} ?>" style="font-size: 18px;" class="form-control">
					<?php

					$totalRows = 0;
					$stSQL ="select * from city";
					// Thực thi truy vấn dữ liệu từ bảng , 
					// kết quả truy vấn được lưu vào mảng
					$result = mysqli_query($link, $stSQL);
					$totalRows = mysqli_num_rows($result);
					if($totalRows>0){
					$i=0;
					// Sử dụng vòng lặp để duyệt kết quả truy vấn
					while ($row = mysqli_fetch_array ($result))
					{
						$i+=1;
						echo '<option value = "'.$row["id_city"].'" >'.$row["name_city"].'</option>';
					}
				}
				?> 
			</select>

		</td>
	</tr>
	<tr class = "active">
		<td height="92" colspan="2"><div align="center">
			<input type="submit" name="signin" value="Đăng ký" class="btn btn-lg btn-primary"/>
			<input  type="button" value="Đóng" onclick="window.open('index.php','_self')" class="btn btn-lg btn-default"/>
		</div></td>
	</tr>
</table>

</form>

</body>	

