<?php
include('modules/menu.php'); 
?>
<div class="container">

	<div class="row col-md-8">
		<?php

if(isset($_POST['search'])){
	$search=$_POST['searchtext'];
	if(!empty($_POST['searchCat'])){
		$categories = $_POST['searchCat'];	
			
		
		switch($categories){
			case "seller":
				$sql="SELECT * FROM book WHERE user_seller_user LIKE '%$search%' " ;
			break;
			
			case "name":
				$sql="SELECT * FROM book WHERE name_book LIKE '%$search%' " ;
			break;
			
			case "author":
				$sql="SELECT * FROM book WHERE author_book LIKE '%$search%' " ;
			break;
			
			case "categories":
				$sql="SELECT * FROM book WHERE category_book LIKE '%$search%' " ;
			break;
		}
		$query=mysqli_query($link,$sql);
		$count=mysqli_num_rows($query);
		

			while($row=mysqli_fetch_array($query)){
				$stSelectBookPic = "select * from image_book where book_id_book = {$row['id_book']} limit 1"; 
				$doSelectBookPic = $link->query($stSelectBookPic);
				$row2 = mysqli_fetch_array($doSelectBookPic)?>
					<div class="col-md-4 ">
						<div class="thumbnail " style="height: 80% ;" > <a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>"><img src="admin/qlsach/img/<?php echo $row2['link_image']?>" width="150" height="150"  alt="Thin"/></a>
							<div class="caption">
								<h3><a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>"><?php echo $row['name_book']?></a></h3>
								<h5 style="bottom:150px;position: absolute;"><?php echo $row['author_book']?></h5>
								<h5 style="bottom:100px;position: absolute;"><?php echo "Người bán : <a href='index.php?page=profile&id=".$row['user_seller_user']."'>".$row['user_seller_user']?></h5>
									<p style="bottom: 50px;position: absolute;">
										<a href="index.php?page=profile&id=<?=$row['user_seller_user']?>" class="btn btn-primary" role="button"  >Liên hệ</a> 
										<a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>" class="btn btn-default" role="button">Chi tiêt</a>
									</p>
								</div>
							</div>
						</div>

						<?php
					}
				}
			else{
				echo '<script>window.alert("Hãy chọn mục")</script>';
			}
	}
				?>
			</div>
		</div>
