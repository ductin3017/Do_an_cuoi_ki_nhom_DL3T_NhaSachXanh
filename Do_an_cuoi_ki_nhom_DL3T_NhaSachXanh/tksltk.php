
<?php
include('main/cf.php');
include("nvk.php");
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
     
                  <br>
                  <p style="font-family: Nunito; font-weight:bold; margin-left: 350px; color: #004225; font-size:24px;"> DANH SÁCH SỐ LƯỢNG SÁCH TRONG KHO</p>
				  <a style="font-size:20px; font-family: Nunito; background-color: #004225;" class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print" ></i> In danh sách</a><br><br>
							
						
                  <table class="table table-bordered table-striped" style="font-size:20px;">
                    <thead>
					
                      <tr style="font-size:18px; font-family: Nunito">
					  
                        <th style="font-size:16px; font-family: Nunito; color:black; height:40px;">Tên Sách</th>
                        <th style="font-size:16px; font-family: Nunito; color:black;">Số Lượng</th>
						
            						<th style="font-size:16px; font-family: Nunito; color:black;">Giá Sách</th>
            						<th style="font-size:16px; font-family: Nunito; color:black;" >Tổng số tiền</th>
            						<th style="font-size:16px; font-family: Nunito; color:black;">Ghi chú</th>
                       
                      </tr>
                    </thead>
                    <tbody>
							<?php
									
									$query=mysqli_query($con,"select * from sach")or die(mysqli_error());
									$grand=0;
                                   
									while($row=mysqli_fetch_array($query)){
										$total=$row['soluong']*$row['gia'];
										$grand+=$total;
							?>
                      <tr>
                        <td><?php echo $row['tensach'];?></td>
                        <td><?php echo $row['soluong'];?></td>
						
						<td><?php echo $row['gia'];?></td>
						<td><?php echo number_format($total,2);?></td>
						
						<td class="text-center" style="color: #004225; font-size: 20px; " ><?php if ($row['soluong']<= 11 )echo "<span class='badge bg-red' ><i class='glyphicon glyphicon-refresh' >Vui lòng nhập thêm</i></span>";?></td>
                       
                      </tr>

<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="3">Tổng số tiền</th>
                        
						
						<th colspan="2"><?php echo number_format($grand,2);?></th>
						
                        
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
         

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	<?php include 'footernvk.php';?>
    <!-- /gauge.js -->
  </body>
</html>
