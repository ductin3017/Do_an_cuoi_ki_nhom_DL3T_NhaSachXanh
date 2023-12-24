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
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headernvk.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage">
                  <h2 style="font-family: Nunito; font-weight:bold; margin-left: 450px; color: #004225">NHẬP THÊM SÁCH</h2>
            <div class="entry" >
                <form action='xulinhapsach.php' method='POST' enctype="multipart/form-data" style="margin-left: 50%;">

                                <br><b style="font-family: Nunito; font-size: 18px; color: #004225">Tên sách:</b><br>
                                <select  name="tensachh" style="width: 500px; font-family: Nunito; font-style: italic; font-size: 16px; height: 30px;">
                                                <?php
									
										
			
											$link = mysqli_connect("localhost","lagezrwa_sach","Sach1234567@") or die ("khong the ket noi");
                                                                                        mysqli_set_charset($link, 'UTF8');
                                                                                        mysqli_select_db($link,"lagezrwa_sach");
                                                                                        $sql="SELECT * FROM sach";
                                                                                        $result = mysqli_query($link,$sql);
											
											while ($row=  mysqli_fetch_array($result))
                                                                                        {
												
												
										echo '<option>'.$row['tensach'].'</option> ';
												
													
												}
												
											
											mysqli_free_result($result);
                                                                                        mysqli_close($link);
								?>
                                </select>
                                <br><br>
                                
                                <b style="font-family: Nunito; font-size: 18px; color: #004225">Số lượng:</b><br>
                                <input type='text' name='soluongg' size='79' style="font-family: Nunito; font-style: italic; font-size: 16px; width: 500px; height: 30px;">
                                <br><br>

                                <input  type='submit' name="submit"  value='   NHẬP   ' style="height: 35px;
    background:#004225;
    border-radius: 5px;
    color: #FAFAFA;
    font-size:18px;">
                </form>
                </div>    
            
            </div>
        </div>
        <div>
            <br>
            <br>
            <br>
            <?php
                include("footernvk.php");
            ?>
        </div>
    </body>
</html>
