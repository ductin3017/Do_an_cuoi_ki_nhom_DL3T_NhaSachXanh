<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật người dùng</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
</head>
<style>
    *{
        font-family: "Nunito";
    margin: 0px;
    padding: 0px;
}

.left-menu{
    width: 250px;
}

.menu{
    margin-bottom: 50px;
}

.noidung{
    display: flex;
    margin: 0px 50px;
    margin-bottom: 20px;
}

.homepage{
    margin-top: 20px;
    margin-left: 10px;
}

.dh th, td{
    border:1px solid #868585;
    text-decoration: none;
    font-family:"Nunito";
    font-size:16px;
    text-align:center;
}
.dh{
    border-collapse:collapse;
}
.dh tr:nth-child(odd){
    background-color:#eee;
}
.dh tr:nth-child(even){
    background-color:white;
}
.dh tr:nth-child(1){
    background-color:#7eda82;
}
</style>
<body>
        <div>
            <?php session_start();               
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung" style="margin-left:4%">
            <div class="homepage">
                  <h2 style="margin-left: 35%; font-family: Nunito; font-weight:bold; color: #004225">XEM THÔNG TIN KHÁCH HÀNG</h2>
				  <br>
                  
   
                  <table class="dh" border='1' WIDTH='100%'> 
                    <tr>
                    <TD style="color:black; background-color:#90CF8E; text-align:center; width:65px; height:40px;"><b>MÃ KH</b></TD>
                    <TD style="color:black; background-color:#90CF8E; text-align:center;width:200px"><b>TÊN KHÁCH HÀNG</b></TD>
                    <TD style="color:black; background-color:#90CF8E; text-align:center;width:400px" ><b>ĐỊA CHỈ</b></TD>
                    <TD style="color:black; background-color:#90CF8E; text-align:center; width:200px" ><b>EMAIL</b></TD>
                    <TD style="color:black; background-color:#90CF8E; text-align:center; width:200px"><b>NGÀY SINH</b></TD>
                    <TD style="color:black; background-color:#90CF8E; text-align:center; width:150px" ><b>NGÀY ĐĂNG KÝ</b></TD>
                    
                  
                    
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","lagezrwa_sach","Sach1234567@") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"lagezrwa_sach");
                    $sql="SELECT * FROM khachhang";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td>'.$row['makh'].'</td>
                                                    <td>'.$row['tenkh'].'</td>
                                                    <td>'.$row['diachikh'].'</td>
                                                    <td>'.$row['emailkh'].'</td>
                                                    <td>'.$row['ngaysinh'].'</td>
                                                    <td>'.$row['ngaydangky'].'</td>
                                                   
                                                                  
                                            </tr>';
                            }
                            }
                    ?>
            </TABLE>
            </div>
        </div>
        <div>
            <br>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
