<script src="support/js/bootstrap.js"></script>
    <script src="support/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="support/css/bootstrap.css" />
	<link rel="stylesheet" href="headerstyle.css" />
  <?php 
	/*session_start();*/
 
$errors=array();
$errors_num = '';
$errors_len = '';
$errors_id = '';
$errors_phone = '';
$errors_id_print = '';
$err_len_print = '';
$err_num_print = '';
$err_phone_print = '';	

 
if(isset($_POST['submit'])){
		  
if(empty($_POST['username'])){
$errors='username';	
}
else{
$username=$_POST['username'];
}

if(isset($_POST['username'])) {
if(strlen($_POST['username']) < 6 ) {
	$errors_id = 'id';
$errors_id_print = "Tên đăng nhập phải dài ít nhất 6 kí tự!";
}
else  {
$username=$_POST['username'];
}
}



if(empty($_POST['pass'])){
$errors='pass';	
}
else{
$pass=md5($_POST['pass']);
}
if(isset($_POST['pass'])) {
if(strlen($_POST['pass']) < 6){
$errors_len = 'len';
$err_len_print = "Mật khẩu phải có trên 6 kí tự!";
}
else{

$pass=md5($_POST['pass']);
}
if(isset($_POST['pass'])) {
$number = preg_match('@[0-9]@', $_POST['pass']);
if(!$number){
$errors_num ='pass_lack_of_num';	
$err_num_print = "Mật khẩu phải chứa ít nhất 1 chữ số!";
}

else{	

$pass=md5($_POST['pass']);
}
}
if(empty($_POST['phone'])){
$errors='phone';	
}
else{
$phone=$_POST['phone'];
}
if(isset($_POST['phone'])) {
$err_phone = preg_match('/^[0-9]+$/',$_POST['phone']);
if(!$err_phone || strlen($_POST['phone'])<10 || strlen($_POST['phone'])>11 ) {
$errors_phone = 'phone';
$err_phone_print = "Không đúng định dạng số điện thoại!";		 	

}
else  {
$phone=$_POST['phone'];

}

}
if(empty($_POST['address'])){
$errors='address';	
}
else{
$address=$_POST['address'];
}
if(empty($_POST['name'])){
$errors='name';	
}
else{
$name=$_POST['name'];
}
if(empty($_POST['email'])){
$errors='email';	
}
else{
$email=$_POST['email'];
}
if(empty($_POST['city'])){
$errors='city';	
}
else{
$city=$_POST['city'];
}
$check_pass=md5($_POST['check_pass']);
}
	if(empty($errors) && empty($errors_len) && empty($errors_num) && empty($errors_phone) && empty($errors_id) ){
   $affectrow=0;
   if($check_pass==$pass){
     $link=mysqli_connect("localhost","thiendiahoi","abcxyz123","bookmarket") or die("Không thể kết nối với máy chủ");
     mysqli_set_charset($link, 'UTF8');
	 
	 $sql="SELECT user FROM user_seller WHERE user='$username' ";
$run=mysqli_query($link,$sql);
if(mysqli_num_rows($run)==1){
echo "<script>alert('Tài khoản đã tồn tại mời bạn tạo tài khoản khác!');</script>";
}
else{

    $query="INSERT INTO user_seller(user,pass,email,name,address,phone,city_id_city) VALUES ('$username','$pass','$email','$name','$address','$phone','$city')";
     $result = mysqli_query($link,$query);

     if(mysqli_affected_rows($link)==1){?>
     <script language="javascript">alert("Thêm thành công");location="index.php?page=quanly_user&tenadmin=<?= $_SESSION['admin'] ?>"</script>
     <?php
     } 
	

   }
   }
   else{
    ?>
     <script language="javascript">alert("Mật Khẩu không trùng khớp");location="index.php?page=quanly_user&tenadmin=<?= $_SESSION['admin'] ?>"</script>
    <?php
	
  }
}
}

?>
<div style="margin-top:2%;">
  <div class="container">
   
   <section class="container-fluid">
     <div class="row ">
      <div class="col-md-4 table-bordered">
        <form name="nhapkhoa" action="index.php?page=quanly_user" method="post">
         <label class="label label-default ">Username</label>
         <input type="text" class="form-control" name="username" required>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $errors_id_print; ?></p></span>
         <label class="label label-default ">Password</label>
         <input type="password" class="form-control" name="pass" required>
         <span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_len_print; ?></p></span>
				<span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_num_print ?></p></span>
         <label class="label label-default ">Check Password</label>
         <input type="password" class="form-control" name="check_pass">
         <label class="label label-default ">Email</label>
         <input type="email" class="form-control" name="email" required>
         <label class="label label-default ">Name</label>
         <input type="text" class="form-control" name="name" required>
         <label class="label label-default ">Address</label>
         <input type="text" class="form-control" name="address">
         <label class="label label-default ">Phone</label>
         <input type="tel" class="form-control" name="phone" required>
         <span style="text-align:left"><p style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:red; font-size:15px" id = "errors"><?php echo $err_phone_print; ?></p></span>
         <label class="label label-default ">City</label>
         <select name = "city" value="<?php if(isset($_POST['city_id_city'])){ echo $_POST['city_id_city'];} ?>"  class="form-control">
					<?php

					$totalRows = 0;
					$stSQL ="select * from city";
					// Thực thi truy vấn dữ liệu từ bảng , 
					// kết quả truy vấn được lưu vào mảng
					$result = mysqli_query($link, $stSQL);
					$totalRows = mysqli_num_rows($result);
					if($totalRows>0){
					$i=0;
					// Sử dụng vòng lặp để duyệt kết quả truy vấn
					while ($row = mysqli_fetch_array ($result))
					{
						$i+=1;
						echo '<option value = "'.$row["id_city"].'" >'.$row["name_city"].'</option>';
					}
				}
				?> 
			</select>
         <br>
		<button type="submit" name="submit" class="btn btn-primary" style="width:100%">Thêm User</button> 
       </form>
     </div>

     <div class="col-md-8 ">
       <?php include('selectUser.php');?>
     </div>

   </div>
 </section>
</div>
</div>