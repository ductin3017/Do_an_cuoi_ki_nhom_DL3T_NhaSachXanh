<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật nhà xuất bản</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    font-family: "Nunito";
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
    text-align:center;
    font-size:18px;
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
    background-color:#61d39a;
}
        </style>
    <body>
        <div>
            <?php session_start();               
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage">
                  <h2 style="font-family: Nunito; font-weight:bold; margin-left: 400px; color: #004225">DANH SÁCH NHÀ XUẤT BẢN</h2>
                  <a href="themnxb.php"><input style="width: 100px;
    height: 35px;
    background:#004225;
    border:none;
    margin-left: 35px;
    margin-top: 20px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;
    font-size:22px;" type="button" value="Thêm"></a>
                  <table class="dh" border='1' WIDTH='100%' style="margin-left: 35px;"> 
                    <tr>
                    <TD style="color:black; height:40px; background-color:#90CF8E" WIDTH='8%' ><b>MÃ NXB</b></TD>
                    <TD style="color:black; background-color:#90CF8E;" WIDTH='30%'><b>TÊN NXB</b></TD>
                    <TD style="color:black; background-color:#90CF8E;" WIDTH='15%'><b>ĐỊA CHỈ NXB</b></TD>
                    <TD style="color:black; background-color:#90CF8E;" WIDTH='15%'><b>SỐ ĐIỆN THOẠI</b></TD>
                    <TD style="color:black; background-color:#90CF8E;" ><b>EMAIL NXB</b></TD>
                    <TD style="color:black; width:80px; background-color:#90CF8E;" ><b></b></TD>
                    <TD style="color:black; width:70px; background-color:#90CF8E;" ><b></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","lagezrwa_sach","Sach1234567@") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"lagezrwa_sach");
                    $sql="SELECT * FROM nhaxuatban";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td>'.$row['manxb'].'</td>
                                                    <td>'.$row['tennxb'].'</td>
                                                    <td>'.$row['diachinxb'].'</td>
                                                    <td>'.$row['sdtnxb'].'</td>
                                                    
                                                    <td>'.$row['emailnxb'].'</td>
                                                    <td><a href=suanxb.php?sid='.$row['manxb'].'>Sửa</td>
                                                    <td><a href=xulixoanxb.php?sid='.$row['manxb'].'>Xóa</td>                 
                                            </tr>';
                            }
                            }
                    ?>
            </TABLE>
            </div>
        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
