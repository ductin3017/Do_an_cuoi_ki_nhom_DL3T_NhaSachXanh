<?php
$conn=mysqli_connect("localhost","lagezrwa_sach","Sach1234567@","lagezrwa_sach")or die("Can't Connect...");
           session_start();          
			$query="delete from nhanvien where manv =".$_REQUEST['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:dsnguoidung.php");

?>
