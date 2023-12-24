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

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>ĐĂNG NHẬP</title>

    <!-- vendor css -->
    <link href="./lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="./lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="./css/azia.css">

  </head>
  <body class="az-body" style="background-image: url(./img/h8.jpg)">

    <div class="az-signin-wrapper" >
      <div class="az-card-signin" style="height:420px; margin-top:100px; background-color:white">
      <br><a href="index.php" style="font-family: Nunito; font-size:28px; text-align: center; font-weight:bold; color:#5A9F68">NHÀ SÁCH XANH</a></br>
        <div class="az-signin-header"> 
        
          <h4 style="font-family: Nunito; font-size:18px; text-align: center; font-weight:bold; color:Black">ĐĂNG NHẬP</h4>
        <form action="xulilogin.php" name="f1" method="post">
        <div class="form-group">
              
             
                <label>Tên đăng nhập</label>
                    <input type="text" id="usn"  class="form-control" size="20" name="tk" placeholder="Tên đăng nhập" >
                    <br>
                    <label>Mật khẩu</label>
                    <input type="password" id="ps"   class="form-control" size="20" name="mk" placeholder="Mật khẩu"> 
                </div>
               
                <input class="btn" type="submit" name="s1" style="margin-bottom:10%; font-family: Nunito; font-weight:bold; color:black;"  value="ĐĂNG NHẬP" onclick="login()">
                <a class="dk" style="margin-left:21%; font-family: Nunito; font-weight:bold; color:#5A9F68;" href="trangdangky.php">ĐĂNG KÝ</a>
                </div>
        </form>
        </div><!-- az-signin-header -->
        <!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/ionicons/ionicons.js"></script>
    <script src="./js/jquery.cookie.js" type="text/javascript"></script>
    <script src="./js/jquery.cookie.js" type="text/javascript"></script>

    <script src="./js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>

