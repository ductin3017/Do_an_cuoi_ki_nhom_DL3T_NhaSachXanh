<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm sách</title>
 <!-- vendor css -->
 <link href="./lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="./lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="./css/azia.css">
    </head>
  
     
    <body>
        <div>
            <?php session_start();               
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung" >
            <div class="homepage">
                <br>
                  <h1 style="font-family:Nunito; font-weight:bold; margin-left: 44%; color: #004225">THÊM SÁCH</h1>
            <div class="entry" >
                <form action='xulinhapkho.php' method='POST' enctype="multipart/form-data" style="margin-left: 18%;">
                <div class="form-group" style="margin-left:15%; ">
                                <br><b style="font-family: 'Nunito'; font-size:16px; color:#004225">Tên sách:</b><br>
                                <input type='text' name='tnsach'  class="form-control" style="font-family: 'Nunito'; font-size:16px; font-style:italic; width:500px">
                                <br><br>

                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Mã Danh mục:</b><br>
                                <select  name="dm" style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                                <?php
									
										
			
											$link = mysqli_connect("localhost","lagezrwa_sach","Sach1234567@") or die ("khong the ket noi");
                                                                                        mysqli_set_charset($link, 'UTF8');
                                                                                        mysqli_select_db($link,"lagezrwa_sach");
                                                                                        $sql="SELECT * FROM danhmuc";
                                                                                        $result = mysqli_query($link,$sql);
											
											while ($row=  mysqli_fetch_array($result))
                                                                                        {
												
												
										echo '<option value="'.$row['madm'].'">  '.$row['tendm'];
												
													
												}
												
											
											mysqli_free_result($result);
                                                                                        mysqli_close($link);
								?>
                                </select>
                                <br><br>
                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Mã NXB:</b><br>
                                <select  name="mnxb" style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                                <?php
									
										
			
											$link = mysqli_connect("localhost","lagezrwa_sach","Sach1234567@") or die ("khong the ket noi");
                                                                                        mysqli_set_charset($link, 'UTF8');
                                                                                        mysqli_select_db($link,"lagezrwa_sach");
                                                                                        $sql="SELECT * FROM nhaxuatban";
                                                                                        $result = mysqli_query($link,$sql);
											
											while ($row=  mysqli_fetch_array($result))
                                                                                        {
												
												
										echo '<option value="'.$row['manxb'].'">  '.$row['tennxb'];
												
													
												}
												
											
											mysqli_free_result($result);
                                                                                        mysqli_close($link);
								?>
                                </select>
                                <br><br>
                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Tên tác giả:</b><br>
                                <input type='text' name='ttg' style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                <br><br>

                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Năm xuất bản:</b><br>
                                <input type='text' name='nxb' style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                <br><br>

                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Giá giảm:</b><br>
                                <input type='text' name='gia' style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                <br><br>
                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Giá gốc:</b><br>
                                <input type='text' name='giagoc' style="width: 500px;" class="form-control">
                                <br><br>
                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Miêu tả:</b><br>
                                <input type='text' name='mieuta' style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                <br><br>
                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Hình ảnh:</b><br>
                                <input type=file name='image' style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">

                                <br><br>
                                <b style="font-family: 'Nunito'; font-size:16px; color:#004225">Nổi bật:</b><br>
                                <input type='text' name='nb'  style="font-family: 'Nunito'; font-size:16px; font-style:italic; width: 500px;" class="form-control">
                                <br><br>

                                <input  type='submit' name="submit"  value='   Lưu   '  style="font-family: 'Nunito'; font-size:18px; font-weight:bold;">
                </form>
                </div>    
            
            </div>
        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
        <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/ionicons/ionicons.js"></script>
    <script src="./js/jquery.cookie.js" type="text/javascript"></script>

    <script src="./js/azia.js"></script>
    </body>
</html>
