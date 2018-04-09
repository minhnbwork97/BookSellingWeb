
<link rel="stylesheet" href="support/css/bootstrap.css" />

<script src="support/jquery-3.2.1.min.js"></script>
<script src="support/js/bootstrap.js"></script>


<?php 

$link=mysqli_connect('localhost','root','','bookmarket') or die("Không thể kết nối");
mysqli_set_charset($link, 'UTF8');
$stSelectBook = "select * from `book` where `user_seller_user` = '".$userSell."' ";
	$doSelectBook = $link->query($stSelectBook);


?>

<table class="table table-striped" >
	<tr class="active">
		<th width="10%"><b>Mã Sách</b></th>
		<th width="10%"><b>Tên Sách</b></th>
		<th width="10%"><b>Thể Loại</b></th>
		<th width="10%"><b>Giá Sách</b></th>
		<th width="10%"><b>Tình Trạng</b></th>
		<th width="10%"><b>Tách Giả</b></th>
		<th width="10%"><b>Mô Tả</b></th>
        <th width="10%"><b>Số Lượng</b></th>
        <th width="20%"><b>Ảnh</b></th>
        
		<th colspan="2" width="30%">&nbsp;</th>
	</tr>
	<?php

	while($row=mysqli_fetch_assoc($doSelectBook)){
		?>	

		<tr valign="top" >
			<td ><?=$row["id_book"] ?></td>
			<td ><?=$row["name_book"] ?></td>
			<td ><?=$row["category_book"] ?></td>
			<td ><?=$row["price_book"] ?></td>
			<td ><?=$row["status_book"] ?></td>
			<td ><?=$row["author_book"] ?></td>
			<td ><textarea class="form-control" rows="4"><?=$row["describe_book"] ?></textarea></td>
            <td ><?=$row["number_book"] ?></td>
            
			<td ><a href="sua.php?user=<?=$row['user']?>">Sửa</a></td>
			<td ><a href="xoaSach.php?id=<?= $row['id_book']?>">Xóa</a></td>
		</tr>

		<?php
	}

	?>
</table>

