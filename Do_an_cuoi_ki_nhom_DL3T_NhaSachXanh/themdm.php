
<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
     $link = mysqli_connect("localhost", "lagezrwa_sach", "Sach1234567@") or die("Khong the ket noi den MySQL");
if(isset($submit)){
    $db_selected = mysqli_select_db($link, "lagezrwa_sach");
    $query="insert into danhmuc(tendm)
			values('$tendmuc')";
    mysqli_set_charset($link, 'UTF8');
    $rs = mysqli_query($link, $query);
    header("Location:dsdanhmuc.php");
}

?>	
	

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm danh mục</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php             
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung" style="height: 400px;">
            <div class="homepage">
                  <h2 style="font-family:Nunito; font-weight:bold; margin-left: 480px; color: #004225">THÊM DANH MỤC</h2>
            <div class="entry" >
                <form method='POST' enctype="multipart/form-data" style="margin-left: 55%;font-family: 'Nunito'; font-size:16px; color: #004225">

                    <br><b style="font-family: 'Nunito'; font-size:16px;">Tên danh mục:</b><br></br>
                                <input type='text' name='tendmuc' style="width:400px; height:30px; font-family: 'Nunito'; font-size:16px; font-style:italic;">
                                <br><br>
                                <input  style="font-family: 'Nunito'; font-size:16px; font-weight: bold;" type='submit' name="submit"  value='  Thêm  '  >
                </form>
                </div>    
            
            </div>
        </div>
  
        
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
