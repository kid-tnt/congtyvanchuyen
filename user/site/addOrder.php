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
   </head>
<body>
<div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
    </div>

<div class="container">
<a href="homeUser.php" style="color:  #1a92bc;">back</a>

            <?php
            $sql_service="SELECT * FROM `service` ";
            $data_service=db_get_list($sql_service);

            ?>
            <form action="../action/ac_addOrder.php" method="POST">
            <div class="container-login"> 
            <label for="address_sender">Nhập địa chỉ gửi</label>
            <input type="text" placeholder="Nhập địa chỉ gửi" name="address_sender">
            <label for="address_receiver">Nhập địa chỉ nhận</label>
            <input type="text" placeholder="Nhập địa chỉ nhận" name="address_receiver">
            <label for="weight">Nhập cân nặng</label>
            <input type="text" placeholder="Nhập cân nặng" name="weight">
            <label for="select">Chọn dịch vụ: </label><br>
            <select name="IDservice" style="width: 300px; height:30px">
            <?php 
            for ($i=0; $i < count($data_service); $i++) 
            echo' <option value="'.$data_service[$i]['ID'].' ">'. $data_service[$i]['name'].'</option>'
            ?>
            </select>
            <button type="submit" name="create">Tạo đơn</button>
            </div>

            </form>


            <?php


            if(!empty($_SESSION['addOrderthanhcong'])){
                echo session_get('addOrderthanhcong'); 
                session_delete('addOrderthanhcong');
            }
            else{
                echo session_get('addOrderthatbai'); 
                session_delete('addOrderthatbai');
            }


            ?>
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

