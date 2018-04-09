<?php include('modules/menu.php');  ?>

<div class="container">

  <div class="row col-lg-8">
    <?php
    $strSQL = "select count(*) from book";
    $result = mysqli_query($link,$strSQL);
    $row=mysqli_fetch_array($result);
    $totalbook = $row[0]; 
    $n=6;
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

    $stSQL="SELECT * FROM book ORDER BY `id_book` DESC Limit {$firstrow},{$n}";
    $query=mysqli_query($link,$stSQL);
	
    ?>


<?php

  while($row=mysqli_fetch_array($query)) { 
	  $stSQL2="SELECT * FROM image_book where book_id_book = '".$row['id_book']."'  limit 1";
	  $query2=mysqli_query($link,$stSQL2);
	  $row2 = mysqli_fetch_array($query2);
  ?>

  <div class="col-md-4 ">

      
    <div class="thumbnail" style="height: 80% ;" > 
      
    <a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>" target="_blank" >
        <img src="admin/qlsach/img/<?php echo $row2['link_image'] ?>" width="150" height="150"  alt="Thin"/>
    </a>
    
      <div class="caption">
        <h3><font size="+1"><a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>" target="_blank">
		<?php echo $row['name_book']?>
        </a></font></h3>
         
        <h5 style="bottom:25%;position: absolute;"><?php echo $row['author_book']?></h5>
            <h5 style="bottom:20%;position: absolute;"><?php echo "Người bán : <a href='index.php?page=profile&id=".$row['user_seller_user']."'>".$row['user_seller_user']?></a></h5>
     
        <p style="bottom: 50px;position: absolute;">
           <a href="index.php?page=profile&id=<?=$row['user_seller_user']?>" class="btn btn-primary" role="button" target="_blank">Liên hệ</a> 
          <a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>" class="btn btn-default" role="button" target="_blank">Chi tiêt</a></p>
     
      
      
        </div>
      </div>
    </div>

    <?php
  }
  ?>
  
  
  <div class="col-md-9" >
<?php 
		if($totalpage>1)
		for($i=1; $i<=$totalpage; $i++ ) { 
?> 
      		<a style="font-size:20px" href="index.php?page=giaodich&trang=<?=$i?>">  
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