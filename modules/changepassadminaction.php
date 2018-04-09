	<?php
	include('../admin/module/config.php');
	?>
	<?php	
	session_start();
	$old = md5($_POST['old']);
	$new1 = md5($_POST['new1']);
	$new2 = md5($_POST['new2'])	;
	$link = mysqli_connect("localhost","thiendiahoi","abcxyz123","bookmarket");
	$user=$_SESSION['admin'];
	$sql = "select * from user_admin where username = '".$user."'"; 
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_array($result);
	$oldpass = $row['password'];
	if($old == $oldpass ) {
		if($new1 == $new2){
		$sql2 = "update user_admin set password = '".$new1."' where username= '".$user."'"; 
		$result2 = mysqli_query($link,$sql2);
		$num = mysqli_affected_rows($link);
		if($num > 0) {?>
			 <script language="javascript">alert("Đổi mật khẩu thành công"); location= "../index.php?page=change_pass";</script>
            <?php
			}
			else{ ?>
             <script language="javascript">alert("Đổi mật khẩu không thành công");location= "../index.php?page=change_pass";</script>
			<?php }
			
	}
	else{ ?>
		<script language="javascript">alert("Sai mật khẩu");location= "../index.php?page=change_pass";</script>
	<?php
    }
	}
	else ?><script language="javascript">alert("Sai mật khẩu");location= "../index.php?page=change_pass";</script> <?php
?>