<script src="../support/js/bootstrap.js"></script>
    <script src="../support/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../support/css/bootstrap.css">
	<?php
	include('admin/module/config.php');
	?>
	<?php
	
	
if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
$errors=array();
$err_id_contain_bw = '';
if(empty($_POST['username'])){
$errors='username';	
}
else{
$username=$_POST['username'];
}

if(empty($_POST['pass'])){
$errors='pass';	
}
else{
$pass=md5($_POST['pass']);
}
$banned = array("DROP","drop","ALTER","alter","DELETE","delete");

if(isset($_POST['username'])) {
    foreach ($banned as $bw) {
        if (stripos($_POST['username'],$bw) !== false) {
		   $err_id_contain_bw = 'Không được chứa khoảng trắng hoặc các kí tự DROP, ALTER, DELETE...';

        }
    }
}
		if(empty($errors)&&empty($err_id_contain_bw)){
			$sql="SELECT * FROM user_seller WHERE user='$username' AND pass='$pass'";
			$query=mysqli_query($link,$sql);
			$row=mysqli_fetch_array($query);
			if(mysqli_num_rows($query)==0){
				$sql2="SELECT * FROM user_admin WHERE username='$username' AND password='$pass'";
				$query2=mysqli_query($link,$sql2);
				$row2=mysqli_fetch_array($query2);
				if(mysqli_num_rows($query2)==0){
					echo "<script>alert('Tài khoản không đúng(hoặc chưa tồn tại) bạn vui lòng nhập lại (hoặc đăng kí thành viên trước khi đăng nhập) !')</script>";
				}
				else{
					$_SESSION['name']=$row2['name'];
					$_SESSION['address']=$row2['address'];
					$_SESSION['admin']=$username;
					//header('Location:admin/module/QuanLy.php?&tenadmin='.$row2['name']);
					 header("location: index.php");
				}
			}
			else{
				$_SESSION['name']=$row['name'];
				$_SESSION['address']=$row['address'];
				$_SESSION['user']=$username;
				header('Location:index.php?page=Book_Management&tenuser='.$username);	
			}
			
		}
	}
	?>
	<div class="R1" align="center">
		<form method="post">
			<table class="table table-condensed" style="margin-left: 0px; font-size: 22px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; width:30%;" >
				<tr class = "active">
					<th height="74" colspan="2" scope="col"><div align="center">ĐĂNG NHẬP</div></th>
				</tr>
				<tr class = "active">
					<td width="359" height="63"><div align="center">Tên đăng nhập :</div></td>
					<td width="365"><input style="width:250px; height:25px;" type="text" name="username" value="" size="30" class="form-control"/>
                    <span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_id_contain_bw; ?></p></span>
                    </td>
				</tr>
				<tr class = "active" >
					<td height="53"><div align="center">Mật khẩu :</div></td>
					<td><input style="width:250px; height:25px;" type="password" name="pass"  value="" class="form-control"/>
     
                    </td>
				</tr>
				<tr class = "active">
					<td height="69" colspan="2"><div align="center">
						<input   type="submit" name="login" value="Login" class="btn btn-lg btn-primary"/>
						<input type="button" value="Đóng" onclick="window.open('index.php','_self')" class="btn btn-lg btn-default"  />
					</div></td>
				</tr>
                <tr class="active">
                <td colspan="2" align="center"><a href="index.php?page=quen_matkhau" >Quên mật khẩu</a></td>
                </tr>
               
                
			</table>
            
		</form>
        
       
	</div>