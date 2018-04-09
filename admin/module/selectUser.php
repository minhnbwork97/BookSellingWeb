<script src="support/js/bootstrap.js"></script>
    <script src="support/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="support/css/bootstrap.css" />


<?php 
include("admin/module/config.php");
$sql1= "select * from user_seller";
$result1 = mysqli_query($link,$sql1);
if(!$result1){
	die('Truy vấn sai');
}

?>

<table class="table table-striped" >
	<tr class="active">
		<th width="10%"><b>Username</b></th>
		<th width="10%"><b>Email</b></th>
		<th width="10%"><b>Name</b></th>
		<th width="10%"><b>Address</b></th>
		<th width="10%"><b>Phone</b></th>
		<th width="10%"><b>City</b></th>
		<th colspan="2" width="30%">&nbsp;</th>
	</tr>
	<?php

	while($row1=mysqli_fetch_assoc($result1)){
		?>	

		<tr valign="top" >
			<td ><?=$row1["user"] ?></td>
			<td ><?=$row1["email"] ?></td>
			<td ><?=$row1["name"] ?></td>
			<td ><?=$row1["address"] ?></td>
			<td ><?=$row1["phone"] ?></td>
			<td ><?=$row1["city_id_city"] ?></td>
			<td ><a href="index.php?page=profile&id=<?=$row1['user']?>">Chi tiết</a></td>
			<td ><a onClick="return confirm('Bạn chắc chắn muốn xóa user này');" href="admin/module/xoa.php?user=<?= $row1['user']?>" >Xóa</a></td>
		</tr>

		<?php
	}

	?>
</table>

