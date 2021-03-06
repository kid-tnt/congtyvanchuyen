<?php 
require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();		
if(empty($_SESSION['id_user'])) {
    header ('Location: ../../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../../public_site/stylectvc_1.css">
    <title>Trang người dùng</title>
    <style> 
    li a {
        color: #1a92bc;
    }
    </style>
</head>
<body>
<div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
    </div>
    <div style="background-color: #1a92bc;"> 
    <?php 
   
    if(!empty(session_get('dangNhapThanhCong'))){
        echo session_get('dangNhapThanhCong');
       
    }
    ?>
    </div>
    <div class="container">
    <h1> Chào mừng đến với trang người dùng </h1>
    <ul class="feature">
    <li> <a href="addOrder.php">Thêm đơn</a></li> 
    <li> <a href="editOrder.php">Sửa đơn</a></li> 
    <li> <a href="showOrder.php">Xem tất cả các đơn </a></li> 
    <li> <a href="cancelOrder.php">Hủy đơn </a></li> 
    <li> <a href="detailUser.php">Sủa thông tin cá nhận </a></li> 

    </ul>
    </div>
    
  <?php
    if(!empty($_SESSION['editthanhcong'])){
        echo session_get('editthanhcong'); 
        session_delete('editthanhcong');
    }
    else{
        echo session_get('editthatbai'); 
        session_delete('editthatbai');
    }
  ?>
   
    
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