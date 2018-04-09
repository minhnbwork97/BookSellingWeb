<?php 
include("admin/module/config.php");
if(isset($_SESSION['user'])) {?>
<link rel="stylesheet" href="../support/css/bootstrap.css" />
<link rel="stylesheet" href="webstyle.css" />
<div class="container">
  <header class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><img class="img-responsive" width="100%" height="" src="img/logo.png"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse" id="menu1">
       <ul  class="nav navbar-nav navbar-left" style="margin-top:100px" >
        
          <li><button type="button" class="btn btn-default" style="margin-left:100px; "><a href="index.php"><b>Trang Chủ</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=giaodich"><b>Sách đang bán</b></a></button></li> 
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=Book_Management&tenuser=<?=$_SESSION['user']?>"><b>Sách cá nhân</b></a></button></li> 
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=profile&id=<?=$_SESSION['user']?>"><b>Trang cá nhân</b></a></button></li>    
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=dichvu"><b>Dịch Vụ</b></a></button></li>
            
            <li></li>
           
          </ul>
      <div align="right">
           <div class="btn-group" align="center">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
   Xin chào: <font style=""><?php echo $_SESSION['user'] ?></font></b>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu "  >
    <li><a href="index.php?page=Book_Management&tenuser=<?=$_SESSION['user'] ?>"><b>Quản Lý Sách</b></a></li>
           <li><a data-toggle="modal" data-target="#myModal" style="cursor:pointer"><b>Sửa thông tin cá nhân</b></a></li>
             
             <li><a href="index.php?page=change_pass"><b>Thay đổi Mật Khẩu</b></a></li>
            <li >
              <a href="modules/huysession.php"><b>Đăng Xuất</b></a>
            </li>
  </ul>
</div></div>
        </div>
       
        <!-- /.navbar-collapse --> 
      </div>
      
      <!-- /.container-fluid --> 
    </nav>
    
  </header>
</div>

<?php 
}
else if(isset($_SESSION['admin'])) {?>
<div class="container" style="">
  <header class="container" >
    <nav class="navbar navbar-default" role="navigation">
      <div class="container" style="background-color:#FFF;border:none"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><img class="img-responsive" width="100%" height="" src="img/logo.png"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse" id="menu1">
          <ul  class="nav navbar-nav navbar-left" style="margin-top:100px" >
        
          <li><button type="button" class="btn btn-default" style="margin-left:100px; "><a href="index.php"><b>Trang Chủ</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=giaodich"><b>Sách đang bán</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=quanly_user"><b>Quản lý người bán</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=them_admin"><b>Thêm quản trị viên</b></a></button></li>


           
          </ul>
            <div align="right">
            <div class="btn-group" align="center" >
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <b>
  ADMIN: <font style=""><?php echo $_SESSION['admin'] ?></font></b> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
     <li><a href="index.php?page=quanly_user&tenadmin=<?= $_SESSION['admin']?>"><b>Quản lý người bán</b></a></li>
     <li><a href="index.php?page=them_admin"><b>Thêm quản trị viên</b></a></li>    
     <li><a href="index.php?page=change_pass"><b>Thay đổi Mật Khẩu</b></a></li>
     <li><a href="modules/huysession.php"><b>Đăng Xuất</b></a></li>
  </ul>
</div></div>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </header>
</div>

<?php 
} 
else{
	
?>
<div class="container">
  <header class="container">
    <nav class="navbar navbar-default" role="navigation">
     
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><img class="img-responsive" width="100%" height="" src="img/logo.png"></a> 
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
          <ul  class="nav navbar-nav navbar-left" style="margin-top:100px">
        
          <li><button type="button" class="btn btn-default" style="margin-left:100px; "><a href="index.php"><b>Trang Chủ</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=giaodich"><b>Sách đang bán</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=gioithieu"><b>Giới Thiệu</b></a></button></li>  
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=lienhe"><b>Liên hệ</b></a></button></li>     
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=dichvu"><b>Dịch Vụ</b></a></button></li>
           
          </ul>
    <div align="right">
          <div class="btn-group"  >
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false"><b>
    Tài Khoản</b> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
     <li >
              <a href="index.php?page=dangnhap"><h5><b>Đăng nhập</b></h5></a>
            </li>
            <li>
            <a href="index.php?page=quen_matkhau"><h5><b>Quên mật khẩu</b></h5></a>
            </li>
            <li >
              <a href="index.php?page=dangky"><h5><b>Đăng Ký</b></h5></a>
            </li>
  </ul>
</div>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    
    </nav>

  
  </header>
 
</div>
<?php }?>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content col-lg-10" style="background-color:lavender">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Cập nhật thông tin cá nhân</h4>
      </div>
      <div class="modal-body">
        <?php 
			include("modules/sua.php");
		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>