<?php 	
	require '../database/database.php';
	db_connect();
	require '../database/session.php';
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
    <title>Kết quả tìm kiếm</title>
    </head>
<body>
<div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
    </div>
    
   
    <div class="container">
    <a  href="index.php" style="color: #118fe2;font-size: 20px;"><i class="fa fa-fw fa-home"></i> Trang chủ</a>
    <br>

<?php

if(isset($_POST['search']))
{
    $_IDorrder=$_POST['ID'];
    $sql_search="SELECT * FROM `lading` WHERE $_IDorrder=`ID`";
$data_search=db_get_row($sql_search);
if(!empty($data_search)){
    echo ' trạng thái của đơn hàng với mã vận đơn ' .$data_search['ID'] .' là: '. $data_search['status'].' <br/>';
     echo  'Đơn hàng được gửi từ '.$data_search['address_sender'].' đến '.$data_search['address_receiver'];
       // echo $data_search['address_receiver'];
       // echo $data_search['weight'];
      //  echo;
        //echo $data_search['address_sender'];
        //echo $data_search['address_sender'];
        //echo $data_search['address_sender'];
}
else{
    echo 'Mã đơn không đúng hoặc không tồn tại';
}

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