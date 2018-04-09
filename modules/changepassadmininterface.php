<?php
?>
<script src="../support/js/bootstrap.js"></script>
    <script src="../support/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../support/css/bootstrap.css">

	<div class="R1" align="center">
		<form action="modules/changepassadminaction.php" method="post">

<table   class="table table-condensed" style="font-size:22px; width:30%; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;" border="0" align="center">
<tr class = "active">
					<th height="74" colspan="2" scope="col"><div align="center">ĐỔI MẬT KHẨU</div></th>
				</tr>
				<tr class = "active">
					<td height="68"><div align="center">Password Cũ</div></td>
					<td><input type="password" name="old"   style=" font-size: 18px; width: 280px; height:30px;" class="form-control" required/>

					</td>
				</tr>
				<tr class = "active">
					<td height="68"><div align="center">Password mới</div></td>
					<td><input type="password" name="new1"   style=" font-size: 18px; width: 280px; height:30px;" class="form-control" required/>
      
					</td>
				</tr>
				<tr class = "active">
					<td width="367" height="70"><div align="center">Nhập lại password mới</div></td>
					<td width="363"><input type="password" name="new2" style=" font-size: 18px; width: 280px; height:30px;" class="form-control"  required/>
           
					</td>
				</tr>
			</table>
            <div align="center">
            <input type="submit" name="submit" value="Update" class="btn btn-lg btn-primary"/>
            </div>
</form>
        
       
	</div>