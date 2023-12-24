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

        <div class="noidung">
            <div class="homepage">
                  <h2 style="margin-left: 40%; font-family: Nunito; font-weight:bold; color: #004225">TẤT CẢ NHÂN VIÊN</h2>
                  <a href="themnguoidung.php"><input style="width: 120px;
    height: 35px;
    background:#004225;
    border:none;
    margin-left: 35px;
    margin-top: 20px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;
    font-size:22px;" type="button" value="Thêm"></a>
     <a href="qltknv.php"><input style="width: 120px;
    height: 35px;
    background:#004225;
    border:none;
    margin-left: 35px;
    margin-top: 20px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;
    font-size:22px;" type="button" value="Cấp quyền"></a>
                  <table class="dh" border='1' WIDTH='100%'> 
                    <tr>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:150px;"><b>MÃ NV</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:300px"><b>TÊN NHÂN VIÊN</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:150px" ><b>TÀI KHOẢN</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center; width:150px" ><b>MẬT KHẨU</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center; width:300px"><b>ĐỊA CHỈ</b></TD>
                     <TD style="color:black; background-color:#90CF8E;text-align:center; width:150px" ><b>SĐT</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;  width:200px" ><b>EMAIL</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:150px"><b>NGÀY SINH</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;;width:90px"><b>GIỚI TÍNH</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:150px" ><b>NGÀY ĐK</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:150px" ><b>PHÂN QUYỀN</b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:100px" ><b></b></TD>
                    <TD style="color:black; background-color:#90CF8E;text-align:center;width:100px"><b></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","lagezrwa_sach","Sach1234567@") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"lagezrwa_sach");
                    $sql="SELECT * FROM nhanvien";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td>'.$row['manv'].'</td>
                                                    <td>'.$row['tennv'].'</td>
                                                    <td>'.$row['usename'].'</td>
                                                    <td>'.$row['password'].'</td>
                                                    <td>'.$row['diachi'].'</td>
                                                     <td>'.$row['sdt'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['ngaysinh'].'</td>
                                                    <td>'.$row['gioitinh'].'</td>
                                                    <td>'.$row['ngaydangky'].'</td>
                                                    <td>'.$row['phanquyen'].'</td>
                                                    <td><a href=suanguoidung.php?sid='.$row['manv'].'>Sửa</td>
                                                    <td><a href=xulixoanguoidung.php?sid='.$row['manv'].'>Xóa</td>                 
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
