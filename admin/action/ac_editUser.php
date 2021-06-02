<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['submitUpdate'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$passwordAgain =($_POST['re_password']);
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$role=$_POST['role'];

$sql_update = "UPDATE `user` SET `fullname`='$fullname',`password`='$password',`phone`='$phone',`address`='$address',`role`='$role' WHERE `email`='$email'";

		if (empty($data_email) && $password == $passwordAgain &&!empty($role) ) {
			//thuc thi dang ki
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

    $email = $_POST['email'];
    $role=$_POST['role'];
    
    $sql_delete = "DELETE FROM `user`  WHERE `email`='$email'";
    
            if ($role=='1' ) {
                db_execute($sql_delete);
    
                session_set('deletethanhcong', '<div class="alert alert-success"Xóa thành công </div>');
                session_delete('deletethatbai');
                header('Location: ../site/showUser.php');
            }else{
                session_set('deletethatbai', '<div class="alert alert-danger"> Lỗi. Vui lòng kiểm tra lại thông tin! </div>');
                session_delete('deletethatbai');
                header('Location: ../site/showUser.php');
            }
    
    }

?> 