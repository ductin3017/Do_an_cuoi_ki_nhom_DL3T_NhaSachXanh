<?php
session_start();
error_reporting(0);
include('main/config.php');


//updating Admin Remark
if(isset($_POST['update']))
		  {
$qid=intval($_GET['id']);
$adminremark=$_POST['adminremark'];
$isread=1;
$query=mysqli_query($con,"update tblcontactus set  AdminRemark='$adminremark',IsRead='$isread' where id='$qid'");
if($query){
echo "<script>alert('Admin Remark updated successfully.');</script>";
echo "<script>window.location.href ='read-query.php'</script>";
}
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | REP</title>
		 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		
	</head>
	<body>
	
		<?php include('headerad.php');
		?>

			<div class="app-content">
				
						
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
							
									<bR>
									<BR>
									<BR>
									<h2 class="mainTitle" style="text-align:center; font-family: Nunito; color: #004225; margin-left:35%; margin-top:10% ">THÔNG TIN YÊU CẦU</h2>
																	</div>
								
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white" style="margin-left:24%;">
						

									<div class="row">
								<div class="col-md-6" style="font-size:17px; font-family: times;">
									
									<table class="table table-hover" id="sample-table-1">
		
										<tbody>
<?php
$qid=intval($_GET['id']);
$sql=mysqli_query($con,"select * from tblcontactus where id='$qid'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<th style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225">Họ & Tên</th>
												<td style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225"><?php echo $row['fullname'];?></td>
											</tr>

											<tr>
												<th style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225">Email </th>
												<td style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225"><?php echo $row['email'];?></td>
											</tr>
											<tr>
												<th style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225">Số điện thoại</th>
												<td style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225"><?php echo $row['contactno'];?></td>
											</tr>
											<tr>
												<th style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225">Yêu cầu</th>
												<td style="font-family: Nunito; font-weight:bold; font-size:16px; color: #004225"><?php echo $row['message'];?></td>
												</tr>

<?php if($row['AdminRemark']==""){?>	
<form name="query" method="post">
	<tr>
												
												<a href="maill/mail.php" style="font-family: Nunito; font-weight:bold; font-size:20px; color: #004225; margin-left: 10px;"> <i class="fa-regular fa-envelope"></i> Gửi mail trả lời</a></p>
												

<tr>
												
											<?php 
											 }} ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<?php
include './view-dr/footer.php'; ?>