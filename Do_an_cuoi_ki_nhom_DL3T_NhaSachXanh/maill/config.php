<?php
define('DB_SERVER','localhost');
define('DB_USER','lagezrwa_sach');
define('DB_PASS' ,'Sach1234567@');
define('DB_NAME', 'lagezrwa_sach');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$con -> set_charset("utf8");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
