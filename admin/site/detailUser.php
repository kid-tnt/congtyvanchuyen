<?php require '../../database/database.php'; db_connect();  
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
    <title>Chi tiết tài khoản</title>
    <body>
<div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
</div>
<a  href="showUser.php" style="display: block;color: #2195dceb;">back</a>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql_selectEmail = "SELECT * FROM `user` WHERE `ID` = '$id'";
	$data_selectEmail = db_get_row($sql_selectEmail);
}
?>
<form action="../action/ac_editUser.php" method="POST" style="display: flex; justify-content: space-around;">
              <div class="container-login">
              <label for="userID"><b>ID</b></label>
                  <input type="text" placeholder="ID" name="userID" value="<?php echo $data_selectEmail['ID'] ?>" readonly >
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="email" name="email" value="<?php echo $data_selectEmail['email'] ?>" >
                  <label for="password"><b>Mật khẩu</b></label>
                  <input type="password" placeholder="mật khẩu" name="password" value="<?php echo $data_selectEmail['password'] ?>" >
                  <label for="password"><b> Xác nhận Mật khẩu</b></label>
                  <input type="password" placeholder="xác nhận mật khẩu" name="re_password" value="<?php echo $data_selectEmail['password'] ?>" >
                  <label for="fullname"><b>Tên đầy đủ</b></label>
                  <input type="text" placeholder="tên đầy đủ" name="fullname" value="<?php echo $data_selectEmail['fullname'] ?>" >
                  <label for="phone"><b>Số điện thoại</b></label>
                  <input type="text" placeholder="số điện thoại" name="phone" value="<?php echo $data_selectEmail['phone'] ?>">
                  <label for="address"><b>Địa chỉ</b></label>
                  <input type="text" placeholder=" địa chỉ" name="address" value="<?php echo $data_selectEmail['address'] ?>">
                  <label for="phone"><b>Quyền</b></label>
                  <input type="text" placeholder="Quyền" name="role" value="<?php echo $data_selectEmail['role'] ?>">

                  <button type="submit" name="submitUpdate">Cập nhật</button>
                  <button type="submit" name="submitDelete">Xóa</button>
              </div>
</form>


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
