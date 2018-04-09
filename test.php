<?php
   $line = "Hoc PhP co ban va nang cao tai VietJack.com!";
   // thực hiện hoạt động tìm kiếm không phân biệt kiểu chữ cho từ "PHP"
   
   if (preg_match("/\bPHP\b/i", $line, $match)) {
      print "Tìm thấy từ PHP!";
      
   }else
		echo 'Không tìm thấy';
?>