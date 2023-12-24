<style>
  *{
    font-family: "Nunito";
  }
    th a{
        color: black;
        font-size: 16px;
    }
    th {
        color:black;
        font-size: 16px;
    }
    </style>
<?php
include ("headerad.php");


?>
<Br>
<br>
<center><h2 style=" color:#004225; font-weight: bold;">THỐNG KÊ</center>
<div class = "container" style="margin-left:100px;">
<center>
	<table class="table table-hover" style = "width:600px; margin-top:50px; font-size: 18px;">
		<tr>
        <th style="font-size: 18px;" scope="row"><a href="dsdanhmuc.php">Tổng danh mục sách hiện tại :</a></th>
	      <td><?php
$con=mysqli_connect("localhost", "lagezrwa_sach", 'Sach1234567@', "lagezrwa_sach");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT madm, tendm FROM danhmuc";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d Danh mục.",$rowcount);
  // Free result set
  mysqli_free_result($result);
  
  }

mysqli_close($con);
?></td>
		</tr>
		
		
		<tr style="font-size: 18px;">
			<th style="font-size: 18px;" scope="row"><a href="dsnguoidung.php">Số lượng nhân viên :</a></th>
	      <td><?php
$con=mysqli_connect("localhost", "lagezrwa_sach", 'Sach1234567@', "lagezrwa_sach");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT manv, tennv FROM nhanvien";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d Nhân viên.",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?></td>
		</tr>
		<tr>
	      <th style="font-size: 18px;" scope="row">Tổng số đơn hàng :</th>
	      <td style="font-size: 18px;" ><?php
$con=mysqli_connect("localhost", "lagezrwa_sach", 'Sach1234567@', "lagezrwa_sach");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT madh FROM donhang";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d Đơn hàng.",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?></td>
		</tr>
        <tr>
	      <th style="font-size: 18px;" scope="row">Tổng số khách hàng :</th>
	      <td style="font-size: 18px;"><?php
$con=mysqli_connect("localhost", "lagezrwa_sach", 'Sach1234567@', "lagezrwa_sach");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT makh, tenkh FROM khachhang";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d Khách hàng.",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?></td>
		</tr>
        <tr>
        <th style="font-size: 18px;" scope="row"><a href="dsnxb.php">Danh sách nhà xuất bản :</a></th>
	      <td style="font-size: 18px;"><?php
$con=mysqli_connect("localhost", "lagezrwa_sach", 'Sach1234567@', "lagezrwa_sach");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT manxb FROM nhaxuatban";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d Nhà xuất bản.",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?></td>
		</tr>
		<tr style="font-size: 18px;">
        <th style="font-size: 18px;" scope="row"><a href="sachad.php">Tổng số sách hiện tại :</a></th>
	      <td style="font-size: 18px;" ><?php
$con=mysqli_connect("localhost", "lagezrwa_sach", 'Sach1234567@', "lagezrwa_sach");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT masach FROM sach ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d Sách.",$rowcount);
  // Free result set
	
  mysqli_free_result($result);
  }

mysqli_close($con);

?></td>


		</tr style="font-size: 18px;">
		<th style="font-size: 18px;"> <a href="https://sandbox.vnpayment.vn/merchantv2/Home/Dashboard.htm">Thanh toán trực tuyến</a></th>
		<th style="font-size: 18px;"> <a href="tk.php">Thông kê doanh thu</a></th>
       
