<?php
$conn=mysqli_connect("localhost","lagezrwa_sach","Sach1234567@","lagezrwa_sach")or die("Can't Connect...");
           session_start();          
			$query="delete from nhaxuatban where manxb =".$_REQUEST['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:dsnxb.php");

?>