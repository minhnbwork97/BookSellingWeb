<?php
ob_start();
session_start();
include("modules/header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="utf-8">
	<title>Bansachcu</title>
    <link rel="icon" type="image/ico" href="favicon.ico">
	<script src="support/js/bootstrap.js"></script>
    <script src="support/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="support/css/bootstrap.css" />
	<link rel="stylesheet" href="headerstyle.css" />
    <script src="support/js/bootstrap.js"></script>
    <script src="support/jquery-3.2.1.min.js"></script>
	<script language="javascript">
			$('#profile-image').on('click', function() {
				$('#profile-image-upload').click();
			});
			
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
</script>
</head>
<body <?php if(empty($_SESSION['admin'])) echo 'style="background-image:url(img/back6.jpg);
             background-repeat:no-repeat;
            "'; ?> >

	<?php
	
	include('admin/module/config.php');
	?>
    
	<?php
	
	if(isset($_REQUEST['page']))
	{
		$page=$_REQUEST['page'];
		switch ($page)
		{
			case "gioithieu":
			include 'modules/gioithieu.php';
			break;
			
			case "giaodich":
			include 'modules/giaodich.php';
			break;
			
			case "dichvu";
			include 'modules/dichvu.php';
			break;
			
			case "chitiet";
			include 'modules/chitiet.php';
			break;
			
			
			
			
			case "search";
			include 'modules/search.php';
			break;
			
			case "danhmuc";
			include 'modules/danhmuc.php';
			break;
			
			case "dangnhap";
			if(isset($_SESSION['admin'])||isset($_SESSION['user'])){
				header('location: index.php');
				}
			else{
			include 'modules/dangnhap.php';
			break;
			}
			
			case "dangky";
			if(isset($_SESSION['admin'])||isset($_SESSION['user'])){
				header('location: index.php');
				}
			else{
			include 'modules/dangky.php';
			break;
			}
			

			case "lienhe";
			echo '<div class="col-md-4"></div><div class="col-md-4">';
				include 'modules/lienhe.php';
			echo '</div>';
			break;
			
			case "profile";
			include 'modules/profile.php';
			break;
			
			case "sua";
			include 'modules/sua.php';
			break;
			
			case "Book_Management";
			if(isset($_SESSION['user'])){
				include 'modules/Book_Management.php';
				break; 
			}
			else{
				header('location: index.php');
			}
					
			case "Book_Update";
			if(isset($_SESSION['user'])){
				include 'modules/Book_Update.php';
				break;
			}
			else{
				header('location: index.php');
			}
			
			case "Book_Delete";
				if(isset($_SESSION['user'])){
				include 'modules/Book_Delete.php';
				break;
			}
			else{
				header('location: index.php');
			}
			
			case "update_user";
			if(isset($_SESSION['user'])){
				include 'modules/sua.php';
				break;
			}	
			else{
				header('location: index.php');
			}
			
			case "them_admin";
			if(isset($_SESSION['admin'])){
				include 'admin/module/them_admin.php';
				break;
			}	
			else{
				header('location: index.php');
			}
				
			case "quanly_user";
			if($_SESSION['admin']){
				include 'admin/module/QuanLy.php';
				break;
			}
			else{
				header('location: index.php');
			}
			
			case "quen_matkhau";
				include 'modules/sendemail.php';
			break;
			
			case "change_pass";
			if(isset($_SESSION['admin'])){
				include 'modules/changepassadmininterface.php';
				break;
			}
			else if(isset($_SESSION['user'])){
				include 'modules/changepassuserinterface.php';
				break;
				}	
			else{
				header('location: index.php');
			}
			
		}
		
		
	}
	else
	{
		include 'modules/content.php';
	}

	
	include('modules/footer.php');
	?>
    
</body>
</html>