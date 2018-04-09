<div class="R1" align="center">
		<form method="post">
			<table class="table table-condensed" style="margin-left: 0px; font-size: 22px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; width:40%;" >
				<tr class = "active">
					<th height="74" colspan="2" scope="col"><div align="center">XÁC NHẬN MẬT KHẨU</div></th>
				</tr>
				<tr class = "active">
					<td width="359" height="63"><div align="center">Tên đăng nhập :</div></td>
					<td width="365"><input style="width:250px; height:25px;" type="text" name="username" value="" size="30" class="form-control"/></td>
				</tr>
				<tr class = "active" >
					<td height="53"><div align="center">Email :</div></td>
					<td><input style="width:250px; height:25px;" type="email" name="email"  value="" class="form-control"/></td>
				</tr>
				<tr class = "active">
					<td height="69" colspan="2"><div align="center">
						<input   type="submit" name="sendemail" value="Xác Nhận" class="btn btn-lg btn-primary"/>
						<input type="button" value="Đóng" onclick="window.open('index.php','_self')" class="btn btn-lg btn-default" />
					</div></td>
				</tr>
			</table>
		</form>
	</div>








<?php
    //goi thu vien
    include ('class.smtp.php');
    include ('class.phpmailer.php'); 
    include ('function.php'); 
	if(isset($_POST['sendemail'])){
		$mTo=$_POST['email'];
		$nTo=$_POST['username'];
		$new_pass=rand(10000,99999);
		$new_pass="a".$new_pass;
		$check="SELECT * FROM `user_seller` WHERE user = '".$nTo."' and email= '".$mTo."'";
		$result=mysqli_query($link,$check);
		
		if(mysqli_num_rows($result)==1){
			$title = 'Xác nhận lại Mật Khẩu';
			$content = 'Mật khẩu của tài khoản '.$nTo.' được trở về '.$new_pass;
		    
			$diachicc = '';
			//test gui mail
			
			$mail = sendMail($title, $content, $nTo, $mTo,$diachicc);
			if($mail>0){ 
			$reset_pass="update user_seller set pass='".md5($new_pass)."' where user='".$nTo."'";
		    $result=mysqli_query($link,$reset_pass);
?>

				<script language="javascript">alert("Đã Gửi Mail")</script>
<?php
			}
			else{ 
?>
				<script language="javascript">alert("Thất bại")</script>
<?php
			}
		}
		else{
?>
				<script language="javascript">alert("Username không tồn tại hoặc không phải email đăng ký")</script>
<?php
		}
				
	}
		
?>
	
    