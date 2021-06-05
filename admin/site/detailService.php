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
<a  href="editService.php" style="display: block;color: #2195dceb;">back</a>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql_selectService = "SELECT * FROM `service` WHERE `ID` = '$id'";
	$data_selectService = db_get_row($sql_selectService);
}
?>
<form action="../action/ac_editService.php" method="POST" style="display: flex; justify-content: space-around;">
              <div class="container-login">
              <label for="ServiceID"><b>ID</b></label>
                  <input type="text" placeholder="ID" name="ServiceID" value="<?php echo $data_selectService['ID'] ?>" readonly >
                  <label for="name"><b>Name</b></label>
                  <input type="text" placeholder="tên" name="name" value="<?php echo $data_selectService['name'] ?>" >
                  <label for="description"><b>Mô tả</b></label>
                  <input type="text" placeholder="Mô tả" name="description" value="<?php echo $data_selectService['description'] ?>" >

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
