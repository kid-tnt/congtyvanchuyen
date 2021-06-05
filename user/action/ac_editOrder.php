<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['subUpdate'])) {
   
$ID_order=$_POST['ID'];
$address_sender = $_POST['address_sender'];
$address_receiver = $_POST['address_receiver'];
$serviceID =($_POST['serviceID']);
$weight=$_POST['weight'];
$status=$_POST['status'];


$sql_updateOrder = "UPDATE `lading` SET `address_sender`='$address_sender',`address_receiver`='$address_receiver',`weight`='$weight',`serviceID`='$serviceID' WHERE `ID`='$ID_order'";

		if ($status=='vừa tạo'|| $status=='đã tiếp nhận') {
			
			db_execute($sql_updateOrder);

			session_set('updateOrderthanhcong', '<div class="alert alert-success">Cập nhật thành công </div>');
			session_delete('updateOrderthatbai');
			header('Location: ../site/showOrder.php');
		}else{
			session_set('updateOrderthatbai', '<div class="alert alert-danger"> Trạng thái không cho phép cập nhật </div>');
			session_delete('updateOrderthanhcong');
			header('Location: ../site/showOrder.php');
		}

}
if (isset($_POST['subDelete'])) {

    $ID_order=$_POST['ID'];
    $status=$_POST['status'];
    
    
    $sql_deleteOrder = "DELETE FROM `lading`  WHERE `ID`='$ID_order'";
    if($status=='vừa tạo'){
        
        db_execute($sql_deleteOrder);
    
        session_set('deleteOrderthanhcong', '<div class="alert alert-success">Hủy thành công </div>');
        session_delete('deleteOrderthatbai');
        header('Location: ../site/showOrder.php');
    }
    else 
    {
        session_set('deleteOrderthatbai', '<div class="alert alert-danger"> Lỗi. Trạng thái đơn hàng không cho phép xóa! </div>');
                session_delete('deleteOrderthanhcong');
                header('Location: ../site/showOrder.php');
    }
    
            
            
    }

?> 