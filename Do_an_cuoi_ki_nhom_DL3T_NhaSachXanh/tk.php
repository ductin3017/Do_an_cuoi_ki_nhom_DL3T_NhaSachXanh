<?php
include("main/cf.php");
?>
<?php include 'headerad.php';


?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
     

        <!-- top navigation -->
          <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"> 
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">					
						<div class = "x-panel">
				 
		  
      	<p style="color:#004225; font-weight:bold; margin-left:36%; margin-top:30px; font-size:24px; font-family:'Nunito'"> THỐNG KÊ DOANH THU</p> 
        
	     
               <br>   
                  
				  <a style="color:#004225; font-weight:bold; font-size:20px; font-family:'Nunito'; background-color:#90CF8E"class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> In thống kê </a> <br>
          <br>
						
						
                  <table class="table table-bordered table-striped" style="font-size:16px;">
                    <thead>
					
                      <tr style="font-family: Nunito; font-size:18px; color: #004225">
					  
                        <th style="font-family: Nunito; font-size:18px; color: #004225">Mã đơn hàng</th>
                        <th style="font-family: Nunito; font-size:18px; color: #004225">Mã khách hàng</th>
						
            						<th style="font-family: Nunito; font-size:18px; color: #004225">Ngày đặt</th>
            						<th style="font-family: Nunito; font-size:18px; color: #004225">Tổng</th>
                     
            						
                       
                      </tr>
                    </thead>
                    <tbody>
							<?php
									
									$query=mysqli_query($con,"select * from donhang where tinhtrang='Nhận hàng - hoàn tất đơn hàng' ")or die(mysqli_error());
									$grand=0;
									while($row=mysqli_fetch_array($query)){
										$total=$row['tongtien'];
										$grand+=$total;
                
							?>
                      <tr>
                        <td style="font-family: Nunito; font-size:16px; color: #004225"><?php echo $row['madh'];?></td>
                        <td style="font-family: Nunito; font-size:16px; color: #004225"><?php echo $row['makh'];?>
                      </td>
                      
						
						<td style="font-family: Nunito; font-size:16px; color: #004225"><?php echo $row['ngaydat'];?></td>
						<td style="font-family: Nunito; font-size:16px; color: #004225"><?php echo number_format($total,2);?></td>
					  
                       
                      </tr>

<?php }?>					  
                    </tbody>
                    <br>
                    <br>
                    <tfoot>
                      <tr>
                        <th style="font-family: Nunito; font-size:16px; color: #004225" colspan="3">Tổng kết doanh thu</th>
                        
						
						<th style="font-family: Nunito; font-size:16px; color: #004225" colspan="2"><?php echo number_format($grand,2);?></th>
						
                        
                      </tr>					  
                    </tfoot>
                  </table>
                </div>
						</div>
				</div>
			</div>
        </div>		
        <!-- /page content -->
	
        <!-- footer content -->
        <footer>
          <div class="pull-right">
       
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	
    <!-- /gauge.js -->
  </body>
</html>
