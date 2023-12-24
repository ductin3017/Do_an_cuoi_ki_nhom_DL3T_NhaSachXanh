<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NHÀ SÁCH XANH</title>

    <link rel="icon" href="img/blog/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/blog/favicon copy.ico" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->

    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="background:#C6EDC3">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <div class="login-bar">

                                    <div class="choose-login">
                                        <?php
                                        if (isset($_SESSION['status'])) {
                                            echo '<a href="updatethongtinnd.php" style="color:#004225">Xin chào: ' . $_SESSION['tnd'] . '</a>';
                                        }
                                        ?>
                                    </div>
                                    <div class="choose-registration">
                                        <a href="xulidangxuat.php" style="color:#8A0829">Đăng Xuất</a>
                                    </div>
                                </div>

                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__cart">
                                    <a href="giohang.php"><img src="img/cart.png" alt=""> </a>
                                    <div class="cart__price"></div>
                                </div>
                            </div>
                            
                            <div class="header__logo">
                                <a href="./indexkh.php"><img src="img/blog/logo.png" width="250" height="me-auto"></a>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu" style=" font-family: Nunito">
                        <ul>
                            <li class="active"><a href="./indexkh.php">Trang chủ</a></li>

                            <li><a href="sach.php">Sản phẩm</a></li>
                            <li><a href="blog.php">Diễn đàn sách</a></li>
                            <li><a href="wiss.php">Đặt sách yêu thích</a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

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