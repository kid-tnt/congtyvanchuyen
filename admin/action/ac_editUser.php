<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['submitUpdate'])) {
$id=$_POST['userID'];
$password = $_POST['password'];
$passwordAgain =($_POST['re_password']);
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$role=$_POST['role'];

$sql_update = "UPDATE `user` SET `fullname`='$fullname',`password`='$password',`phone`='$phone',`address`='$address',`role`='$role' WHERE `ID`='$id'";
$sql_getEmail = "SELECT `email` FROM `user` WHERE `email`='$email'";
$data_email = db_get_row($sql_getEmail);
		if ($password == $passwordAgain &&!empty($role) ) {
			
			db_execute($sql_update);

			session_set('editthanhcong', '<div class="alert alert-success">Cập nhật thành công </div>');
			session_delete('editthatbai');
			header('Location: ../site/showUser.php');
		}else{
			session_set('editthatbai', '<div class="alert alert-danger"> Lỗi. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('editthanhcong');
			header('Location: ../site/showUser.php');
		}

}
if (isset($_POST['submitDelete'])) {

    $id=$_POST['userID'];
   
    
    $sql_deleteuser = "DELETE FROM `user`  WHERE `ID`='$id'";
    
           
                db_execute($sql_deleteuser);
    
                session_set('deleteuserthanhcong', '<div class="alert alert-success">Xóa thành công </div>');
                session_delete('deleteuserthatbai');
                header('Location: ../site/showUser.php');
           
               
    
    }

?> 