<?php 

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
          <a class="navbar-brand" href="#"><img class="img-responsive" width="100%" height="" src="img/logo.png"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse" id="menu1">
       <ul  class="nav navbar-nav navbar-left" style="margin-top:140px" >
        
          <li><button type="button" class="btn btn-default" style="margin-left:100px; "><a href="index.php"><b>Trang Chủ</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=giaodich"><b>Sách bán</b></a></button></li>
          <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=profile&id=<?=$_SESSION['user']?>"><b>Trang cá nhân</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=gioithieu"><b>Giới Thiệu</b></a></button></li>        
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=dichvu"><b>Dịch Vụ</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=lienhe"><b>Liên Hệ</b></a></button></li>
            <li></li>
           
          </ul>
          <div align="right">
           <div class="btn-group" align="center">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
   Xin chào: <font style=""><?php echo $_SESSION['user'] ?></font></b>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu"  >
    <li><a href="index.php?page=Book_Management&tenuser=<?=$_SESSION['user'] ?>"><b>Quản Lý Sách</b></a></li>
           <li><a href="index.php?page=sua&user=<?=$_SESSION['user'] ?>"><b>Sửa Thông Tin</b></a></li>
             
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
<div class="container">
  <header class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#"><img class="img-responsive" width="100%" height="" src="img/logo.png"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse" id="menu1">
          <ul  class="nav navbar-nav navbar-left" style="margin-top:140px" >
        
          <li><button type="button" class="btn btn-default" style="margin-left:100px; "><a href="index.php"><b>Trang Chủ</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=gioithieu"><b>Giới Thiệu</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=giaodich"><b>Giao Dịch</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=dichvu"><b>Dịch Vụ</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=lienhe"><b>Liên Hệ</b></a></button></li>

           
          </ul>
            <div align="right">
            <div class="btn-group" align="center" >
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <b>
  ADMIN: <font style=""><?php echo $_SESSION['admin'] ?></font></b> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
     <li><a href="index.php?page=quanly_user&tenadmin=<?= $_SESSION['admin']?>"><button type="button" class="btn btn-default" style="margin-left:100px; ">Quản Lý User</button></a></li>
          
             
            <li >
              <a href="modules/huysession.php"><button type="button" class="btn btn-default" style="margin-left:100px; ">Đăng Xuất</button></a>
            </li>
            <li>
            <a href="index.php?page=changepass&user=<?=$_SESSION['admin']?>"><button type="button" class="btn btn-default" style="margin-left:100px; ">Thay mật khẩu</button></a>
            </li>
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
          <a class="navbar-brand" href="#"><img class="img-responsive" width="100%" height="" src="img/logo.png"></a> 
        </div>
        <br>
        <br>

       <div class="col-md-12" align="center">
    <form  method="post" action="index.php?page=search">
        <table width="80%">
        <tr align="center">
        <td><input name="searchtext" class="form-control mr-sm-2" type="text"  placeholder="Nhập tên sách" ></td>
        <td><input name="search" class="btn btn-default" type="submit" value="Tìm kiếm"></td>
        </tr>
        </table>

  	</form>
  </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
          <ul  class="nav navbar-nav navbar-left"  >
        
          <li><button type="button" class="btn btn-default" style="margin-left:100px; "><a href="index.php"><b>Trang Chủ</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=gioithieu"><b>Giới Thiệu</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=giaodich"><b>Giao Dịch</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=dichvu"><b>Dịch Vụ</b></a></button></li>
            <li><button type="button" class="btn btn-default" style="margin-left:20px; "><a href="index.php?page=lienhe"><b>Liên Hệ</b></a></button></li>
            <li></li>
           
          </ul>
          <div align="right">
          <div class="btn-group"  >
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false"><b>
    Tài Khoản</b> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
     <li><a href="index.php?page=dangnhap"><button type="button" class="btn btn-default" style="margin-left:100px; ">Đăng nhập</button></a></li>
     <li ><a href="index.php?page=dangky"><button type="button" class="btn btn-default" style="margin-left:100px; ">Đăng Ký</button></a></li>
  </ul>
</div></h5>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    
    </nav>

  
  </header>
 
</div>
<?php }?>
