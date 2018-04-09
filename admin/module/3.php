<script src="support/js/bootstrap.js"></script>
    <script src="support/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="support/css/bootstrap.css" />


<?php 
$link=mysqli_connect('localhost','root','','bookmarket') or die("Không thể kết nối");
mysqli_set_charset($link, 'UTF8');
$sql= "select * from user_seller";
$result = mysqli_query($link,$sql);
if(!$result){
	die('Truy vấn sai');
}

?>

<table class="table table-striped" >
	<tr class="active">
		<th width="10%"><b>Username</b></th>
		<th width="10%"><b>Password</b></th>
		<th width="10%"><b>Email</b></th>
		<th width="10%"><b>Name</b></th>
		<th width="10%"><b>Address</b></th>
		<th width="10%"><b>Phone</b></th>
		<th width="10%"><b>City</b></th>
		<th colspan="2" width="30%">&nbsp;</th>
	</tr>
	<?php

	while($row=mysqli_fetch_assoc($result)){
		?>	

		<tr valign="top" >
			<td ><?=$row["user"] ?></td>
			<td ><?=$row["pass"] ?></td>
			<td ><?=$row["email"] ?></td>
			<td ><?=$row["name"] ?></td>
			<td ><?=$row["address"] ?></td>
			<td ><?=$row["phone"] ?></td>
			<td ><?=$row["city_id_city"] ?></td>
			<td ><a href="index.php?page=update_user&user=<?=$row['user']?>">Sửa</a></td>
			<td ><a onClick="return confirm('Bạn chắc chắn muốn xóa user này');" href="admin/module/xoa.php?user=<?= $row['user']?>" >Xóa</a></td>
		</tr>

		<?php
	}

	?>
</table>

