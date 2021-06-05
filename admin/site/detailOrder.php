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
<a  href="showOrder.php" style="display: block;color: #2195dceb;">back</a>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql_selectOrder = "SELECT * FROM `lading` WHERE `ID` = '$id'";
	$data_selectOrder = db_get_row($sql_selectOrder);
}
?>
<form action="../action/ac_editOrder.php" method="POST" style="display: flex; justify-content: space-around;">
              <div class="container-login">
                  <label for="ID"><b>Mã đơn:</b></label><br>
                  <input type="text" name="ID" value="<?php echo $data_selectOrder['ID'] ?>" readonly>
                  <label for="userID"><b> Người tạo đơn:</b></label><br>
                  <input type="text" name="userID" value="<?php echo $data_selectOrder['userID'] ?>" readonly>
                  <label for="address_sender"><b>Địa chỉ gửi</b></label>
                  <input type="text" placeholder="Địa chỉ gửi" name="address_sender" value="<?php echo $data_selectOrder['address_sender'] ?>" >
                  <label for="address_receiver"><b>Địa chỉ nhận</b></label>
                  <input type="text" placeholder="Địa chỉ nhận" name="address_receiver" value="<?php echo $data_selectOrder['address_receiver'] ?>">
                  <label for="weight"><b>Cân nặng</b></label>
                  <input type="text" placeholder=" Cân nặng" name="weight" value="<?php echo $data_selectOrder['weight'] ?>">
                 
                  <label for="serviceID">Chọn dịch vụ</label>
                  <select name="serviceID" >
                     <?php 
                      $sql_service="SELECT * FROM `service` ";
                      $data_service=db_get_list($sql_service);
                        for ($i=0; $i < count($data_service); $i++) 
                        echo' <option value="'.$data_service[$i]['ID'].' ">'. $data_service[$i]['name'].'</option>'
                        ?>
                  
                  </select>
                  <br>
                  <label for="status">Trạng thái</label>
                <select name="status" >
                <option value="đã tiếp nhận">đã tiếp nhận</option>
                <option value="đang giao hàng">đang giao hàng</option>
                <option value="đã giao hàng">đã giao hàng</option>
                <option value="chờ xác nhận ">chờ xác nhận</option>
                <option value="hoàn thành">hoàn thành</option>
                </select>

               

                  <button type="submit" name="subUpdate">Cập nhật</button>
                  <button type="submit" name="subDelete">Xóa</button>
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
