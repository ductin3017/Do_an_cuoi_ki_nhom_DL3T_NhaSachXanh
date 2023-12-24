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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="your-integrity-hash" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
    <link rel="stylesheet" href="main/indexkh.css"/>
</head>

<body >
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    
                              
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
<header class="header"   style="background-color:#C6EDC3">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="header__top__inner" >
                            <div class="header__top__left">
                            <div class="choose-login">
                    <?php 
                            if(isset($_SESSION['status']))
                            {
                                    echo '<a href="updatethongtinnd.php" style="color:#8A0829"> Xin chào: '.$_SESSION['tnd'].'</a>'; 
                            }
                    ?>
            </div>
                         
                            <div class="choose-login">
                <a href="xulidangxuat.php" style="color:#344E41; ">ĐĂNG XUẤT</a>
            </div>
            
            <div class="choose-registration">
                  
            </div>
                            </div>
                            <div class="header__logo" >
                            <a href="./indexkh.php"><img src="img/blog/logo.png" width="250" height="me-auto"></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right">
                                <a href="#" class="search-switch"></a>
                                    <a href="#"></a>
                                </div>
                                <div class="header__top__right__cart" >
                                    <div class="cart__price"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
           
        </div>
        <div class="container" >
            <div class="row"  >
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu"  style=" font-family: Nunito">
                    <ul>
                        <li class="active"><a href="./indexkh.php">Trang chủ</a></li>
                    
                            <li><a href="sach.php">Sản phẩm</a></li>
                            <li><a href="blog.php">Diễn đàn sách</a></li>
                            <li><a href="wiss.php">Đặt sách yêu thích</a></a>
                               
                            </li>
                            
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/luot1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text" style="height:450px;">
                                <h2>Nhà Sách Xanh</h2>
                                <img src="./img/blog/fanpage.jpg" style="width:180px; margin-left:35%">
                                <br>
                                <a href="#" class="primary-btn" style="background:#344E41">Thiên đường của mọt sách</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/luot2.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Làm cho cuộc sống của bạn trở nên đơn giản chỉ bằng cách đọc một cuốn sách!</h2>
                                <a href="#" class="primary-btn" style="background:#344E41">Sách của chúng tôi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span style="color:#0b243b">Thông tin về Nhà sách xanh</span>
                            <h2>Những cuốn sách tốt nhất có sẵn với giá tốt nhất!</h2>
                        </div>
                        <p>"Nhà sách xanh" là một tiệm sách nhỏ, khởi đầu là một doanh nghiệp nhỏ.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Sách ngôn tình</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Sách hot hiện nay</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Sách trí tuệ</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Team Section Begin -->
   
    <!-- Team Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad" STYLE="background:#eaf7f2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span style="color:#0b243b">Những câu nói</span>
                        <h2>HAY VỀ SÁCH</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                  
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Gustavơ Lebon</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            
                            <p>. Đừng bao giờ cho mượn sách – chưa ai từng trả lại chúng; những cuốn sách duy nhất tôi có trong thư viện của mình là những cuốn người khác cho tôi mượn..</p>
                        </div>
                    </div>
                  
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                
                            </div>
                            <p>  Bạn biết rằng bạn đã đọc một cuốn sách hay khi bạn giở đến trang cuối cùng và cảm thấy như mình vừa chia tay một người bạn</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                   
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                
                            </div>
                            <p>Như một đứa trẻ đọc truyện, điều tồi tệ là khi bạn đọc đến hồi kết, và thế rồi xong. Ý tôi là thật đau khổ khi truyện không còn thêm nữa.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                              
                            </div>
                            <p> Đọc sách khi còn trẻ như nhìn trăng qua khe cửa; đọc sách lúc đứng tuổi như nhìn trăng ở ngoài sân; đọc sách lúc về già như nhìn trăng trên sân thượng..</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                  
                                </div>
                                <div class="testimonial__author__text">
                                    <h5> Vi Hiền Truyện</h5>
                                
                                </div>
                            </div>
                            <div class="rating">
                             
                            </div>
                            <p>Ngôi nhà không có sách là ngôi nhà nghèo nàn, thậm chí dù sàn nhà được trải toàn thảm đẹp và trên tường dán giấy trải tường và treo tranh quý giá.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad" style="background-color:white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span style="color:#0b243b">Theo dõi chúng tôi trên instagram</span>
                            <h2>Những khoảng khắc ngọt ngào được lưu làm kỉ niệm.</h2>
                        </div>
                        <a href="https://www.instagram.com/nhasachxanhdl3t/"><h5> <i class="fa fa-instagram"></i> @nhasachxanhdl3t</h5></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/kc.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/dg.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/dee.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/cm.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/th.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/kctg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Section End -->

    <!-- Class Section Begin -->
    <section class="class spad" style="background:#e2f9ed">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="class__form">
                        <div class="section-title">
                            <span style="color:#0b243b"> Nhà sách xanh</span>
                            <h2 id="lienhe">Hãy liên hệ cho chúng tôi <br /></h2>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Tên">
                            <input type="text" placeholder="Số điện thoại">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Type your requirements">
                            <button type="submit" class="site-btn">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="class__video set-bg" data-setbg="img/nen5.jpg">
            </div>
        </div>
    </section>
    <!-- Class Section End -->
    
    <?php
    include("danhgia.php");
    ?>
  

    

   <!-- Footer Section Begin -->
   <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Giờ làm việc</h6>
                        <ul>
                            <li>Thứ 2 đến thứ 6: 08:00 am – 08:30 pm</li>
                            <li>Thứ 7, chủ nhật và ngày Lễ: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <p> Nhà Sách Xanh</p>
                        </div>
                        <p>Tôi yêu chính nỗi đau, yêu nó, nhưng tôi dành nó cho khách hàng chính.</p>
                        <div class="footer__social">
                            <a href="https://www.facebook.com/bookstoregreen/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/nhasachxanhdl3t"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Dĩ An, Bình Dương</h6>
                        <p>Thắc mắc liên hệ.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> ĐỒ ÁN CUỐI KÌ NHÓM DL3T</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  
            </div>
        </div>
    </div>
</footer>
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

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "104908998659810");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


</body>

</html>