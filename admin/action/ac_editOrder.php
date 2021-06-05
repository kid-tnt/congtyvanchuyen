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

$sql_updateOrder = "UPDATE `lading` SET `address_sender`='$address_sender',`address_receiver`='$address_receiver',`weight`='$weight',`serviceID`='$serviceID',`status`='$status' WHERE `ID`='$ID_order'";

		if (!empty($weight) && !empty($status)) {
			//thuc thi dang ki
			db_execute($sql_updateOrder);

			session_set('updatethanhcong', '<div class="alert alert-success">Cập nhật thành công </div>');
			session_delete('updatethatbai');
			header('Location: ../site/showOrder.php');
		}else{
			session_set('updatethatbai', '<div class="alert alert-danger"> Lỗi. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('updatethanhcong');
			header('Location: ../site/showOrder.php');
		}

}
if (isset($_POST['subDelete'])) {

    $ID_order=$_POST['ID'];
    
    $sql_deleteOrder = "DELETE FROM `lading`  WHERE `ID`='$ID_order'";
    
            
                db_execute($sql_deleteOrder);
    
                session_set('deletethanhcong', '<div class="alert alert-success">Xóa thành công </div>');
                session_delete('deletethatbai');
                header('Location: ../site/showOrder.php');
            
    }

?> 