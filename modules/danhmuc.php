<?php include('modules/menu.php'); ?>
<div class="container">

	<div class="row col-lg-8">
		<?php
		if(isset($_GET['id'])){
			$id=$_GET['id'];	
		}
		$sql="SELECT * FROM book WHERE category_book like '$id'" ;
		$query=mysqli_query($link,$sql);
		
		$count=mysqli_num_rows($query);
		if($count==0)
		{
			echo "<script> alert('Không tìm thấy!');</script>";
		}
		else
		{
			while($row=mysqli_fetch_array($query)){
				$sql2="SELECT * FROM `image_book` where `book_id_book` = '".$row['id_book']."' limit 1" ;
				$query2=mysqli_query($link,$sql2);
				$row2 = mysqli_fetch_array($query2);
				?>
					<div class="col-md-4 ">
                    
						<div class="thumbnail " style="height: 80% ;" > <a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>"><img src="admin/qlsach/img/<?php echo $row2['link_image']?>" width="150" height="150"  alt="Thin"/></a>
							<div class="caaption">
								<h3><a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>"><?php echo $row['name_book']?></a></h3>
								<h5 style="bottom:150px;position: absolute;"><?php echo $row['author_book']?></h5>
								<h5 style="bottom:100px;position: absolute;"><?php echo "Người bán : <a href='index.php?page=profile&id=".$row['user_seller_user']."'>".$row['user_seller_user']?></h5>
									<p>...</p>
									<p style="bottom: 50px;position: absolute;">
										<a href="#" class="btn btn-primary" role="button"  >Mua</a> 
										<a href="index.php?page=chitiet&id=<?php echo $row['id_book'] ?>" class="btn btn-default" role="button">Chi tiêt</a>
									</p>
								</div>
							</div>
						</div>

						<?php
					}
				}
				?>
			</div>
		</div>