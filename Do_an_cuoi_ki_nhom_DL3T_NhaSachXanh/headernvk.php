
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>DasBoard NVK</title>

    <!-- vendor css -->
    <link href="./lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="./lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="./lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./js/semantic.min.css" />
    <link rel="stylesheet" href="style.css" />
    <!-- azia CSS -->
    <link rel="stylesheet" href="./css/azia.css">

  </head>
  <body>

  <div class="az-header" style="background-color:#E4FDE1;  height:70px;">
      <div class="container" style="background-color:#E4FDE1; height:70px; ">
        <div class="az-header-left">
        <a href="" ></a><img src="img/blog/logo.png" width="250" height="me-auto"></a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> North HILLS</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item">
              <a href="indexnvk.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i>Trang chủ</a>
            </li>
           
            <li class="nav-item">
              <a href="khohang.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Xem sách</a>
            </li>
          
            <li class="nav-item">
              <a href="phieunhap.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Xem phiếu nhập</a>
            </li>
           
            <li class="nav-item">
              <a href="xemdsdonhangduyet.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Xem DSDH</a>
            </li>
             <li class="nav-item">
              <a href="tksltk.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Tồn kho</a>
            </li>
            <li class="nav-item">
              <a href="dsdonhangduyet.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Cập nhật DSDH</a>
            </li>
            <li class="nav-item">
              <a href="nhapsach.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Nhập sách</a>
            </li>

              <div class="az-menu-sub">
                <div class="container">
                  <div>
                  
                  </div>
                </div><!-- container -->
              </div>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
         
          
         <div class="az-header-message">
        
         </div><!-- az-header-message -->
         <div class="dropdown az-header-notification">
          
           <div class="dropdown-menu">
             <div class="az-dropdown-header mg-b-20 d-sm-none">
               <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
             </div>
           
          
             <div class="az-notification-list">
               <div class="media new">
                 <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                 <div class="media-body">
                  
                 </div><!-- media-body -->
               </div><!-- media -->
               <div class="media new">
                 <div class="az-img-user online"><img src="./img/nb2.jpg" alt=""></div>
                 <div class="media-body">
                  
                 </div><!-- media-body -->
               </div><!-- media -->
               <div class="media">
                 <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div> 
                 <div class="media-body">
                  
                 </div><!-- media-body -->
               </div><!-- media -->
               <div class="media">
                 <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                 <div class="media-body">
                  
                 </div><!-- media-body -->
               </div><!-- media -->
             </div><!-- az-notification-list -->
             <div class="dropdown-footer"><a href="">Xem tất cả thông báo</a></div>
           </div><!-- dropdown-menu -->
         </div><!-- az-header-notification -->
         <div class="dropdown az-profile-menu" style="width:50px">
           <a href="" class="az-img-user"><img src="./img/boy1.jpg" alt="" style="width:50px; height:45px;"></a>
           <div class="dropdown-menu">
             <div class="az-dropdown-header d-sm-none">
               <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
             </div>
             <div class="az-header-profile">
               <div class="az-img-user">
                 <img src="./img/boy1.jpg" alt="">
               </div><!-- az-img-user -->
               <h6>Nhân viên kho</h6>
             <div class="login-bar">
            <div class="choose-login">
                    <?php 
                            if(isset($_SESSION['status']))
                            {
                                    echo '<a href="#"> '.$_SESSION['tnd'].'</a>'; 
                            }
                    ?>
            </div>
             </div><!-- az-header-profile -->

            
             <a href="xulidangxuat.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> ĐĂNG XUẤT</a>
           </div><!-- dropdown-menu -->
         </div>
       </div><!-- az-header-right -->
     </div><!-- container -->
   </div><!-- az-header -->