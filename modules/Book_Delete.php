<?php 
//include('admin/module/config.php');
//include(dirname(''));
//include(dirname(_FILE_)."admin/module/config.php");
include('admin/module/config.php');
$link = mysqli_connect("localhost", "root", "", "bookmarket");
$id=$_GET['id'];

$stselect = "SELECT * FROM image_book WHERE book_id_book='".$id."'";
$doSelectBookPic = mysqli_query($link,$stselect);

while($row = mysqli_fetch_array($doSelectBookPic)){
	$path ="admin/qlsach/img/".$row['link_image'];
	echo $row['link_image'];
	unlink($path);
}


$sql = "SET SQL_SAFE_UPDATES = 0";
$sql1= " delete from image_book where book_id_book=".$id;
$sql2= " delete from book where id_book='".$id."'";
$result = mysqli_query($link,$sql);
$result2 = mysqli_query($link,$sql1);
$result1 = mysqli_query($link,$sql2);
if(!$result1 || !$result2){
	die('Truy vấn sai');
}
//header('Location:Book_Management.php');
header('Location:'. $_SERVER['HTTP_REFERER'].'');
?>