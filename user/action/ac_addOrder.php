<?php
require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();	
?>
<?php
if(isset($_POST['create'])){
    $userID=$_SESSION['id_user'];
    $serviceID=$_POST['IDservice'];
    $addsender=$_POST['address_sender'];
    $addreceiver=$_POST['address_receiver'];
    $weight=$_POST['weight'];
    $sql_addOrder="INSERT INTO `lading` VALUE (NULL,'$userID','$serviceID','$addsender','$addreceiver',CURRENT_TIMESTAMP,'$weight','vừa tạo')";
   
        //thuc thi dang ki
        db_execute($sql_addOrder);
    session_set('addOrderthanhcong', '<div class="alert alert-success">thêm thành công </div>');
        session_delete('addOrderthatbai');
        header('Location: ../site/addOrder.php');
    }
    //else{
       // session_set('addOrderthatbai', '<div class="alert alert-danger"> thêm thất bại. Vui lòng kiểm tra lại thông tin! </div>');
        //session_delete('addOderthanhcong');
      //  header('Location: ../site/addOrder.php');
  //  }



?>