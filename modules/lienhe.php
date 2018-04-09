<?php 
	include("admin/module/config.php"); 
	$sql1 = "select * from `user_admin`";
	$result1 = mysqli_query($link,$sql1);

?>


<h3 align="center">Danh Sách Quản Trị Viên</h3>
<table class="table table-striped table-bordered" >
	<tr class="active">
		<th width=""><b>Name</b></th>
		<th width=""><b>Email</b></th>
	</tr>
	<?php

	while($row1=mysqli_fetch_assoc($result1)){
		?>	

		<tr valign="top" >
			<td ><?=$row1["name"] ?></td>
			<td ><?=$row1["email"] ?></td>
		</tr>

		<?php
	}

	?>
    
</table>
<p><b>
    Nếu phát hiện những thành phần lừa đảo trong hệ thống người bán sách hãy chụp ảnh chứng cứ và gửi về cho quản trị viên theo địa chỉ email trên đây để chúng tôi có những biện pháp kịp thời.<br>
    Ngoài ra, nếu gặp phải bất cứ vấn đề gì không hài lòng với website của chúng tôi hãy gửi phản hồi về cho các quản trị viên theo địa chỉ email trên đây <br>
    Cảm ơn bạn đã sử dụng website
	
</b></p>

