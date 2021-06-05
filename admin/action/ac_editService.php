<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['submitUpdate'])) {
$id=$_POST['ServiceID'];

$name=$_POST['name'];
$description=$_POST['description'];


$sql_update = "UPDATE `service` SET `name`='$name',`description`='$description' WHERE `ID`='$id'";

		if (!empty($name) &&!empty($description) ) {
			
			db_execute($sql_update);

			session_set('updateServicethanhcong', '<div class="alert alert-success">Cập nhật thành công </div>');
			session_delete('updateServicethatbai');
			header('Location: ../site/editService.php');
		}else{
			session_set('updateServicethatbai', '<div class="alert alert-danger"> Lỗi. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('updateServicethanhcong');
			header('Location: ../site/editService.php');
		}

}
if (isset($_POST['submitDelete'])) {

    $id=$_POST['ServiceID'];
   
    
    $sql_deleteService = "DELETE FROM `service`  WHERE `ID`='$id'";
    
           
                db_execute($sql_deleteService);
    
                session_set('deleteServicethanhcong', '<div class="alert alert-success">Xóa thành công </div>');
                session_delete('deleteServicethatbai');
                header('Location: ../site/editService.php');
           
               
    
    }

?> 