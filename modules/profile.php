
<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$stSQL="SELECT * FROM `user_seller` WHERE `user` = '".$id."'";
	$query=mysqli_query($link,$stSQL);
	$row=mysqli_fetch_array($query);	
	$strSQL1 = "select count(*) from book where `user_seller_user` = '".$id."'";
    $result1 = mysqli_query($link,$strSQL1);
    $row1=mysqli_fetch_array($result1);
    $totalbook = $row1[0]; 
    $n=3;
    $totalpage = ceil($totalbook/$n); 
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

    $stSQL3="SELECT * FROM book where `user_seller_user` = '".$id."' Limit {$firstrow},{$n}";
    $query3=mysqli_query($link,$stSQL3);
}?>



<div >
<?php include('modules/menu.php');?>
</div>
    


<div class="row col-lg-8">


<div class="container-fluid well" style="width:800px; float:left">
	<div class="row-fluid">
            <div class="" style="float:right">
            <img src= "admin/qlsach/ava/<?php if(!empty($row['ava'])) echo $row['ava']; else echo 'default1.PNG'; ?>" class="img-circle" style="max-width:150px; max-height:150px">
            </div>
            
            <div class="" >
                <h3><font color="#0066FF"><b><?php echo $row['name']; ?></b></font></h3>               
                <h5><b>Số điện thoại:</b><font size="+1" color="#0066FF"> <?php echo $row['phone'];?></font></h5>
                <h5><b>Email:</b><font size="+1" color="#0066FF"> <?php echo $row['email'];?></font></h5>
                <h5><b>Địa chỉ:</b><font size="+1" color="#0066FF"> <?php echo $row['address']; ?></font></h5>
                <h5><b>Khu vực:</b><font size="+1" color="#0066FF"> <?php  $select = "select `name_city` from `city` where `id_city`='".$row['city_id_city']."'"; 
									$doselect = mysqli_query($link,$select);
									$row4 = mysqli_fetch_array($doselect);
									echo $row4[0]; 
									?></font></h5>
                <h5><b>Số sách đăng bán:</b><font size="+1" color="#0066FF"> <?php echo $totalbook; ?></font></h5>
            </div>
 <?php 
 
 if(isset($_SESSION['user'])&&$_SESSION['user']==$id){
	
 ?>   
     <div class="btn-group" >
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
       <font style="">Hoạt động</font></b>
        <span class="caret"></span>
        </button>
     
         <ul class="dropdown-menu"  >
         			<li><a href="index.php?page=Book_Management&tenuser=<?=$_SESSION['user'] ?>"><b>Quản lý sách</b></a></li>
                    <li><a data-toggle="modal" data-target="#myModal" style="cursor:pointer"><b>Cập nhật thông tin cá nhân</b></a></li>
                    <li><a href="modules/huysession.php"><b>Đăng Xuất</b></a></li>
        </ul>
     </div>
 <?php
 		}
   ?> 
   
		</div>
	</div>
</div>




<div class="row col-md-8" align="center">
<h2 style="color:#06F" align="center"><b> Sách đăng bán</b> </h2>
</div>

<div>
<div class="container">

  <div class="row col-md-8">

  <?php

  while($row3=mysqli_fetch_array($query3)) { 
  $stSQL2="SELECT * FROM image_book where book_id_book = ".$row3['id_book']." Limit 1";
    $query2=mysqli_query($link,$stSQL2);
  $row2 = mysqli_fetch_array($query2);
  
  ?>

  <div class="col-md-4 ">
    <div class="thumbnail " style="height: 77% ;" > <a href="index.php?page=chitiet&id=<?php echo $row3['id_book'] ?>"><img src="admin/qlsach/img/<?php echo $row2['link_image']?>" width="150" height="150"  alt="Thin"/></a>
      <div class="caption">
        <h3><a href="index.php?page=chitiet&id=<?php echo $row3['id_book'] ?>"><?php echo $row3['name_book']?></a></h3>
        <h5 style="bottom:150px;position: absolute;"><?php echo $row3['author_book']?></h5>
        <h5 style="bottom:100px;position: absolute;"><?php echo "Người bán : <a href='index.php?page=profile&id=".$id."'>".$id?></a></h5>
        <p>...</p>
        <p style="bottom: 50px;position: absolute;">

          <a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>" class="btn btn-default" role="button">Chi tiêt</a></p>
        </div>
      </div>
    </div>

    <?php
  }
  ?>
  <div class="col-md-12" >
<?php 
		if($totalpage>1)
		for($i=1; $i<=$totalpage; $i++ ) { 
?> 
      		<a style="font-size:20px" href="index.php?page=profile&id=<?=$id?>&trang=<?=$i?>">  
                <button class="btn btn-primary btn-sm" <?php if(isset($_GET['trang'])) if($_GET['trang']==$i) echo 'disabled';  ?> ><font style="font-size:17px;">
                    <b><?=$i?></b></font>
                </button>   
            </a>
<?php
    	} 
?>
  </div>
</div>
</div>
</div>


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

