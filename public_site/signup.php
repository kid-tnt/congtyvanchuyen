<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylectvc_1.css">
    <title>Đăng kí</title>
</head>
<body>
<div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
    </div>
   
    <div class="container">
    <a  href="index.php" style="color: #118fe2;font-size: 20px;"><i class="fa fa-fw fa-home"></i> Trang chủ</a>
    <h1>Điền thông tin vào mẫu dưới đây để đăng kí
    </h1>
    <form action="../admin/action/ac_signup.php" method="POST" style="display: flex; justify-content: space-around;">
              <div class="container-login">
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Nhập email" name="email" required>
                  <label for="password"><b>Mật khẩu</b></label>
                  <input type="password" placeholder="Nhập mật khẩu" name="password" required>
                  <label for="re_password"><b> Xác nhận Mật khẩu</b></label>
                  <input type="password" placeholder="Nhập lại mật khẩu" name="re_password" required>
                  <label for="fullname"><b>Tên đầy đủ</b></label>
                  <input type="text" placeholder="Nhập tên đầy đủ" name="fullname" >
                  <label for="address"><b>Địa chỉ</b></label>
                  <input type="text" placeholder="Nhập địa chỉ" name="address">
                  <label for="phone"><b>Số điện thoại</b></label>
                  <input type="text" placeholder="Nhập số điện thoại" name="phone">
                  <button type="submit" name="submitSigning">Đăng kí</button>
              </div>
</form>
    </div>

    
<footer class="container">
    <div class="row-footer">
        <div class="pull-left">
            <div class="coppyright">
                    Công ty vận chuyển
            </div>
            <p>
            Mỗ Lao-Hà Đông- Hà Nội<br>
            Giấy CNĐKKD: 0106181807 - Ngày cấp 21/05/2013, đăng ký thay đổi lần 06 ngày 04/04/2021.<br>
            Cơ quan cấp: Phòng Đăng ký kinh doanh - Sở kế hoạch và đầu tư TP Hà Nội<br>
            </p>

        </div>
        <div class="pull-right">
        <p>
            Theo dõi chúng tôi tại:
        </p>
        <div class="icon-bar">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="google"><i class="fa fa-google"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>
    </div>

    </div>
    <div class="container text-center">
    Bản quyền thuộc về Công ty vận chuyển

    </div>
</div>

</footer>
</body>
</html>