<?php
require "../../database/database.php" ;
db_connect();
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
    <title>Đơn hàng</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
a {
    color: #1a92bc;
}
</style>
</head>
<body>
<div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
    </div>
    
   
    <div class="container">
    <a  href="homeadmin.php" style="display: block;color:  #1a92bc;">back</a>
    <h1>Tất cả đơn hàng sẽ được hiển thị ở đây</h1>
   
    <table>
    <tr>
        <th>ID dịch vụ</th>
        <th>Tên dịch vụ</th>
        <th>Mô tả</th>
         <th></th>
    </tr>
    <?php
 
    $sql_service="SELECT * FROM `service`";
    $data_service=db_get_list($sql_service);
    for ($i=0; $i < count($data_service); $i++) { 
        echo '
   
        <tr>
                <td >'.$data_service[$i]['ID'].'</td>
                <td>'.$data_service[$i]['name'].'</td>
                <td>'.$data_service[$i]['description'].'</td>
                <td><a href="detailService.php?id='.$data_service[$i]['ID'].'">chi tiết</a></td>
           
                <br>
             
            </tr>
      
            ';
        
    } 
       
?> 

    </table>
   



    </div>

    <?php 
    if(!empty($_SESSION['updateServicethanhcong'])){
        echo session_get('updateServicethanhcong'); 
        session_delete('updateServicethanhcong');
    }
    else{
        echo session_get('updateServicethatbai'); 
        session_delete('updateServicethatbai');
    }
    if(!empty($_SESSION['deleteServicethanhcong'])){
        echo session_get('deleteServicethanhcong'); 
        session_delete('deleteServicethanhcong');
    }
    else{
        echo session_get('deleteServicethatbai'); 
        session_delete('deleteServicethatbai');
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