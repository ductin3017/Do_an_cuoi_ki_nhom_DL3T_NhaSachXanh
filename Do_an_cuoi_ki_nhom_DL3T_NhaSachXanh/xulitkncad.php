<?php
$conn = mysqli_connect("localhost", "lagezrwa_sach", "Sach1234567@", "lagezrwa_sach") or die("Can't Connect...");
session_start();
$query = "";
$searchn = $_GET['sn'];
mysqli_set_charset($conn, 'UTF8');

if (isset($searchn)) {
    $query = "SELECT * FROM sach WHERE tensach LIKE '%$searchn%'";
}

$res = mysqli_query($conn, $query) or die("Can't Execute Query...");
$num = mysqli_num_rows($res);

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
    <title>Tất cả sách</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<style>
*{
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
    margin-left: 20px;
}

.dh th, td{
    border:1px solid #868585;
    text-decoration: none;
    font-family:times;
    font-size:16px;
}
.dh{
    border-collapse:collapse;
    margin-bottom: 10px;
}
.dh tr:nth-child(odd){
    background-color:#eee;
}
.dh tr:nth-child(even){
    background-color:white;
}
.dh tr:nth-child(1){
    background-color:#88ec8c;
}

.page{
    display: flex;
    height: 40px;
    justify-content:center;
}

.page-item{
    display: flex;
    align-items: center;
    justify-content:center;
    min-width: 40px;
    font-size: 20px;
    text-decoration: none;
    color: #000;
    border: 1px solid #BDBDBD;
}

.page-item:hover{
    background: #f46523;
}

.curren-page{
    display: flex;
    align-items: center;
    justify-content:center;
    min-width: 40px;
    font-size: 20px;
    text-decoration: none;
    color: #fff;
    border: 1px solid #BDBDBD;
    background: #000;
}
        </style>

<body>
    <div>
        <?php {
            include("headerad.php");
        }
        ?>
    </div>

    <div class="noidung">
        <div>
            <?php
            include("tkncad.php");
            ?>
        </div>
    </div>
    <div class="hhomepage">
    <?php
        if ($num > 0) {
            echo '<table class="dh" border="1" width="100%">';
            echo '<tr>
                    <th style="color:black; text-align:center; width: 50px; height:50px;"><b>MÃ</b></th>
                    <th style="color:black; text-align:center; width: 250px;"><b>TÊN SÁCH</b></th>
                    <th style="color:black; text-align:center; width: 130px;"><b>TÊN TÁC GIẢ</b></th>
                    <th style="color:black; text-align:center; width: 120px;"><b>DANH MỤC</b></th>
                    <th style="color:black; text-align:center; width: 150px;"><b>TÊN NXB</b></th>
                    <th style="color:black; text-align:center; width: 50px;"><b>NXB</b></th>
                    <th style="color:black; text-align:center; width: 70px;"><b>SL</b></th>
                    <th style="color:black; text-align:center; width: 85px;"><b>GIÁ </b></th>
                    <th style="color:black; text-align:center; width: 120px;"><b>IMAGE</b></th>
                    <th style="color:black; text-align:center; width: 80px;"><b>NỔI BẬT</b></th>
                    <th style="color:darkgreen; width: 50px;"><b></b></th>
                    <th style="color:darkgreen; width: 50px;"><b></b></th>
                  </tr>';
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<tr>
                        <td style="text-align:center;">' . $row['masach'] . '</td>
                        <td style="text-align:center;">' . $row['tensach'] . '</td>
                        <td style="text-align:center;">' . $row['tentacgia'] . '</td>
                        <td style="text-align:center;">' . $row['danhmuc'] . '</td>
                        <td style="text-align:center;">' . $row['tennxb'] . '</td>
                        <td style="text-align:center;">' . $row['nxb'] . '</td>
                        <td style="text-align:center;">' . $row['soluong'] . '</td>
                        <td style="text-align:center;">' . $row['gia'] . '</td>
                        <td style="text-align:center;"><img src="' . $row['hinhanh'] . '" width="50" height="50"></td>
                        <td style="text-align:center;">' . $row['noibat'] . '</td>
                        <td></td>
                        <td></td>
                      </tr>';
            }
            echo '</table>';
        } else {
            echo '<h2 class="kcokq" style="font-family: Nunito; color:green; margin-top:50px">Không có kết quả trả về</h2>';
        }
        
        ?>

    </div>
    </div>
    <div>
        <?php
        include("footerad.php");
        ?>
    </div>
</body>

</html>