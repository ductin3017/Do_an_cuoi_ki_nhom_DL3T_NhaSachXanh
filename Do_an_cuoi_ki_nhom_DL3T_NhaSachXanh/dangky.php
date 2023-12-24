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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ĐĂNG KÍ</title>

    <!-- vendor css -->
    <link href="./lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="./lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="./css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-signup-wrapper" style=" background-color: #C6EDC3">
      <div class="az-column-signup-left" style="padding-top:180px; height:500px; background-color: #C6EDC3">
        <div>
          <h1 style="font-size:30px; font-family:Nunito; font-weight:bold; color:blue"> 
          <br>
          <br>
          <div class="header__logo" >
                                <a href="./index.php"><img src="img/blog/logo.png" width="300" height="me-auto"></a>
                            </div></h1>
                            <br>
          <b><h5>Lời giới thiệu</h5></b>  
          <p  style="font-family:Nunito; font-weight:italic; font-size:18px; text-align:justify;">“Nhà Sách Xanh là một điểm đến tuyệt vời cho những người yêu sách và muốn tìm kiếm sự yên bình giữa thế giới hối hả. Với không gian thoáng đãng và trang trí bằng cây xanh mát, nhà sách này không chỉ là một địa điểm để mua sách mà còn là nơi để tận hưởng không khí thư giãn và sáng tạo. Nhà Sách Xanh tự hào với một bộ sưu tập đa dạng từ các thể loại văn học, khoa học, nghệ thuật đến sách thiếu nhi, đảm bảo đáp ứng đa dạng sở thích và nhu cầu đọc sách của mọi độc giả. Không chỉ là một cửa hàng sách, Nhà Sách Xanh còn là điểm đến cho những buổi gặp gỡ với tác giả, các sự kiện văn hóa, và các khóa học sáng tạo. Đến với Nhà Sách Xanh, bạn sẽ trải nghiệm sự kết hợp hoàn hảo giữa văn hóa đọc sách và không gian xanh tươi, tạo nên một trải nghiệm đọc sách độc đáo và tận hưởng.”</p>
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup" >
        <h1 style="font-size:28px; font-family: Nunito; text-align:center ;font-weight:bold; color:dark green"> ĐĂNG KÝ</h1>
        <div class="az-signup-header">
        <form action="xulidangky.php" name="f1" method="post"> 
        <div class="form-group">
                <div class="textbox">
                <label>Tên tài khoản</label>
                    <input type="text" id="usn" class="form-control" size="20" name="tk" placeholder="Username" ></br>
                <label>Mật khẩu</label>
                    <input type="password" id="pw"  class="form-control" size="20" name="mk" placeholder="Password"> </br>
                <label>Nhập lại mật khẩu</label>
                    <input type="password" id="pwa"  class="form-control" size="20" name="nlmk" placeholder="Password"> </br>
                <label>Tên người dùng</label>
                <input type="text" id="tnd" size="20"  class="form-control" name="tnd" placeholder="Tên người dùng"></br>
                <label>Số điện thoại</label>
                    <input type="tell" id="sdt" size="20"  class="form-control" name="sdt" placeholder="Số điện thoại"></br>
                <label>Địa chỉ</label>
                    <input type="text" id="dc" size="20"class="form-control"  name="dc" placeholder="Địa chỉ" ></br>
                <label>Email</label>
                    <input type="email" id="em" size="20" class="form-control" name="em" placeholder="Email"></br>
                <label>Ngày sinh</label>
                    <input type="date" id="ns" size="20" class="form-control" name="ns"></br>
                
                </div>
                <div style="display: flex; justify-content: space-between;">
    <input class="btn" tabindex="7" type="submit" name="s1" value="ĐĂNG KÝ" onclick="saveInfo()" style="font-size: 18px; font-family: Nunito; font-weight:bold; text-align: left; color: green;">

    <!-- <button class="btn btn-block" style="font-size: 18px; font-family: Nunito; font-weight:bold; text-align: right; color: green;">
        <a href="<?= $authUrl ?>"><i class="fab fa-google"></i> Đăng ký với google</a>
    </button> -->
</div>
                <label id="errorMessage"></label>
                </div>
        </form>
        <br>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Đã có tài khoản vui lòng đăng nhập <a href="trangdangnhap.php">Đăng nhập</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/ionicons/ionicons.js"></script>
    <script src="./js/jquery.cookie.js" type="text/javascript"></script>

    <script src="./js/azia.js"></script>
   
  </body>
</html>