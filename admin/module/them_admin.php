
<link rel="stylesheet" href="../support/css/bootstrap.css">

<?php 

include('admin/module/config.php');
if(isset($_SERVER['REQUEST_METHOD'])=='POST'){

	$errors_num = '';
	$errors_len = '';
	$errors_id = '';
	$errors_checkpass = '';
	$err_id_contain_bw = '';

	$banned_id = array("DROP","drop","ALTER","alter","DELETE","delete"," ");
	$banned = array("DROP","drop","ALTER","alter","DELETE","delete");

	if(isset($_POST['username'])) {
		foreach ($banned_id as $bw) {
			if (stripos($_POST['username'],$bw) !== false) {
				$err_id_contain_bw = 'Không được chứa khoảng trắng hoặc các kí tự DROP, ALTER, DELETE...';

			}
		}
	}
}

if(isset($_POST['username'])) {
	if(strlen($_POST['username']) < 6 ) {
		$errors_id= "Tên đăng nhập phải dài ít nhất 6 kí tự!";
	}
	else{
		$username = $_POST['username'];
	}
	if(strlen($_POST['pass']) < 6){
		$errors_len = "Mật khẩu phải có trên 6 kí tự!";
	}
	if(isset($_POST['check_pass'])) {
		if($_POST['check_pass'] != $_POST['pass']) {
			$errors_checkpass = 'Không trùng khớp';
		}	
	}
	else{
		$pass=md5($_POST['pass']);
	}
}
if(isset($_POST['pass'])) {
	$number = preg_match('@[0-9]@', $_POST['pass']);
	if(!$number){
		$errors_num= "Mật khẩu phải chứa ít nhất 1 chữ số!";
	}

	else{	
		$pass=md5($_POST['pass']);
	}

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
	$email = $_POST['email'];
}


if(empty($errors) && empty($errors_len) && empty($errors_num) && empty($err_id_contain_bw) && empty($errors_checkpass)){
	$sql="SELECT username FROM user_admin WHERE username='$username' ";
	$run=mysqli_query($link,$sql);
	if(mysqli_num_rows($run)==1){
		echo "<script>alert('Tài khoản đã tồn tại mời bạn tạo tài khoản khác!');</script>";
	}
	else{
		$query="INSERT INTO user_admin(username,password,name,email) VALUES ('$username','$pass','$name','$email')";
		$results=mysqli_query($link,$query) ;
		$num=mysqli_affected_rows($link);
		if($num==1){
			?>
			<script language="javascript">alert("Bạn đã đăng ký thành công");location="index.php?page=them_admin";</script>
			<?php
		}
		else if($num==0) {?>
		<script language="javascript">alert("Bạn đã đăng ký không thành công");location="index.php?page=them_admin";</script>
		<?php
	}
}

$_POST['username']='';
$_POST['pass']='';
$_POST['name']='';
}

?>
<body>
<div class="row">
<br>

<div style="float:left; margin-left:3%" class="col-md-5">
	<form name="signin" method="post" enctype="multipart/form-data" id = "submit" action="">
		<?php
		if(isset($a)){
			echo $a;	
		}

		?>

		<table class="table table-condensed" style="font-size:22px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;" border="0" align="center">
			<tr class = "active">
				<th style=" color:black; font-size: 28px;" height="90" colspan="2" scope="col"><div align="center">ĐĂNG KÝ TÀI KHOẢN ADMIN</div></th>
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
				<td width="367" height="70"><div align="center">Email</div></td>
				<td width="363"><input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" style=" font-size: 18px; width: 280px; height:30px;" class="form-control" placeholder="Điền email" required/>

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
</div>


<div class="col-md-5">
<h3 align="center">Danh Sách Quản Trị Viên</h3>
<table class="table table-striped table-bordered" >
	<tr class="active">
    	<th width=""><b>Username</b></th>
		<th width=""><b>Tên</b></th>
		<th width=""><b>Email</b></th>
	</tr>
    
	<?php
	$sql1 = "select * from `user_admin`";
	$result1 = mysqli_query($link,$sql1);
	while($row1=mysqli_fetch_assoc($result1)){
		?>	

		<tr valign="top" >
        	<td ><?=$row1["username"] ?></td>
			<td ><?=$row1["name"] ?></td>
			<td ><?=$row1["email"] ?></td>
		</tr>

		<?php
	}

	?>
    
</table>
</div>
</div>
</body>	