<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="">


</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .table {
        width: 250px;
        margin-top: 15%;
        border: 1px;
    }

    .danhmuc {
        height: 20px;
        background: #E4FDE1;
        color: #344E41;
    }

    .tendm {
        color: #344E41;
        font-size: 16px;
    }

    .tendm a {
        text-decoration: none;
        color: #344E41;
        margin-left: 10px;
        transition: color 0.3s;
    }

    .tendm a:hover {
        color: #344E41; /* Set the hover color to be the same as the normal color */
    }
</style>


<body>



    <?php
    $link = mysqli_connect("localhost", "lagezrwa_sach", "Sach1234567@") or die("khong the ket noi");
    mysqli_set_charset($link, 'UTF8');
    mysqli_select_db($link, "lagezrwa_sach");
    $sql = "SELECT * FROM danhmuc";
    $result = mysqli_query($link, $sql);
    echo '<table class=table >';
    echo '<TR><TH class="danhmuc" style="font-family:Nunito; font-size:16px;">DANH MỤC SẢN PHẨM</TH></TR>';
    //        echo '<TH background="#f46523" color="#fff">';
    while ($row =  mysqli_fetch_array($result)) {
        if (isset($_SESSION['status'])) {
            echo
            '<TR><TD class="tendm " style="font-family: Nunito;"><a href="sachdm.php?madm=' . $row['madm'] . '">' . $row['tendm'] . '</a></TD></TR>';
        } else {
            echo
            '<TR  style="font-family: Nunito; text-align:left;  font-size:16px;"><TD class="tendm"><a href="sachdmvl.php?madm=' . $row['madm'] . '">' . $row['tendm'] . '</a></TD></TR>';
        }
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
</body>

</html>