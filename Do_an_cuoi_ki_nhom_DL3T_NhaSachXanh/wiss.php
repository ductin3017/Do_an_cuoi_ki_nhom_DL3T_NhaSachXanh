
<?php
define('DB_SERVER','localhost');
define('DB_USER','lagezrwa_sach');
define('DB_PASS' ,'Sach1234567@');
define('DB_NAME', 'lagezrwa_sach');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='wiss.php'</script>";

}
 


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Sách</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/cake.css" type="text/css">
</head>

<body>
<div>
            <?php session_start();
                if(isset($_SESSION['status']))
                {
                       include("header.php");
                }
                else {
                    include ("header-kh.php");
                }
            ?>
        </div>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Đặt sách sắp ra mắt</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Class Section Begin -->
    <section class="class-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="class__item">
                                <div class="class__item__pic set-bg" data-setbg="img/wiss1.jpg">
                                 
                                </div>
                                <div class="class__item__text">
                                    <h5><a href="https://dantri.com.vn/van-hoa/noi-khong-co-tuyet-giac-mo-chinh-phuc-nui-tuyet-cua-cau-be-xu-nhiet-doi-20231216171150081.htm">NƠI KHÔNG CÓ TUYẾT</a></h5>
                                   
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="class__item">
                                <div class="class__item__pic set-bg" data-setbg="img/wiss2.jpg">
                                
                                </div>
                                <div class="class__item__text">
                                    <h5><a href="https://tuoitre.vn/bep-am-cua-me-va-hoi-uc-xuc-dong-ve-nhung-bua-com-lanh-20171026171225224.htm">BẾP ẤM CỦA MẸ</a></h5>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="class__item">
                                <div class="class__item__pic set-bg" data-setbg="img/wiss3.jpg">
                                   
                                </div>
                                <div class="class__item__text">
                                    <h5><a href="https://tuoitre.vn/cam-on-vi-da-vuot-qua-vin-vao-yeu-thuong-de-vuot-qua-20231116105049989.htm">CẢM ƠN VÌ ĐÃ VƯỢT QUA </a></h5>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="class__item">
                                <div class="class__item__pic set-bg" data-setbg="img/wiss4.jpg">
                                   
                                </div>
                                <div class="class__item__text">
                                    <h5><a href="https://dantri.com.vn/van-hoa/lac-da-bay-tac-gia-gen-z-ke-mien-dat-noi-tam-cua-nhung-phan-doi-troi-noi-20231220004836028.htm">LẠC ĐÀ BAY</a></h5>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="class__item">
                                <div class="class__item__pic set-bg" data-setbg="img/wiss5.jpg">
                                  
                                </div>
                                <div class="class__item__text">
                                    <h5><a href="https://dantri.com.vn/van-hoa/2-nguoi-trong-1-ngan-tu-khi-con-nguoi-phai-tranh-dau-de-duoc-lam-nguoi-20231217180650620.htm">2 NGƯỜI TRONG 1 NGĂN TỦ</a></h5>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="class__item">
                                <div class="class__item__pic set-bg" data-setbg="img/wiss6.jpg">
                                   
                                </div>
                                <div class="class__item__text">
                                    <h5><a href="https://dantri.com.vn/van-hoa/the-nao-la-con-nguoi-va-nhung-van-de-thoi-dai-trong-truyen-dai-di-ban-20231218165711175.htm">DỊ BẢN</a></h5>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop__pagination">
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="class__sidebar">
                        <h5>Bạn yêu thích sách gì? Nhà sách xanh sẽ tìm giúp bạn.</h5>
                      
                       
                        <div class="contact-form">
				  
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label style="color:black">Họ và tên</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label >Địa chỉ mail</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label > Số điện thoại</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label >Tên sách bạn muốn</label></span><br>
						    	<span><textarea name="description" required="true" style="width:100%"> </textarea></span>
						    </div>
						   <div>
						   		<span ><input type="submit" name="submit" value="Gửi cho Nhà sách xanh" style="background: #004225;
    border:none;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;"></span>
						  </div>
					    </form>
				    </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Section End -->

    <!-- Footer Section Begin -->
    <?php
    include("footer.php")
    ?>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>