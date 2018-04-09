<?php 
session_start();
$link=mysqli_connect('localhost','thiendiahoi','abcxyz123','bookmarket') or die("Không thể kết nối");
mysqli_set_charset($link, 'UTF8');
$user=$_GET['user'];
$sql1="select * from image_book where book_id_book in (select id_book from book where `user_seller_user`='".$user."')";
$deleteIm=mysqli_query($link,$sql1);
while($row = mysqli_fetch_array($deleteIm)){
	$path ="../qlsach/img/".$row['link_image'];
	echo $row['link_image'];
	unlink($path);
}

$sqlDeleteIM="delete from image_book where book_id_book in (select id_book from book where `user_seller_user`='".$user."')";
$deleteIm=mysqli_query($link,$sqlDeleteIM);

$sqlDeleteBook="delete from book where user_seller_user='".$user."'";
mysqli_query($link,$sqlDeleteBook);

$sqlSelect="select * from user_seller where user='".$user."'";;
$result1= mysqli_query($link,$sqlSelect);
$row= mysqli_fetch_array($result1);
$path ="../qlsach/ava/".$row['ava'];
			unlink($path);
			

$sql= "delete from user_seller where user='".$user."'";
$result = mysqli_query($link,$sql);
if(!$result){
	die('Truy vấn sai');
}
header('Location: ../../index.php?page=quanly_user');
?>