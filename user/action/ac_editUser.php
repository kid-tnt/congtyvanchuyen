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


$sql_update = "UPDATE `user` SET `fullname`='$fullname',`password`='$password',`phone`='$phone',`address`='$address' WHERE `email`='$email'";

		if (empty($data_email) && $password == $passwordAgain ) {
		
			db_execute($sql_update);

			session_set('editthanhcong', '<div class="alert alert-success">Cập nhật thông tin thành công </div>');
			session_delete('editthatbai');
			header('Location: ../site/homeUser.php');
		}else{
			session_set('editthatbai', '<div class="alert alert-danger"> Lỗi. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('editthanhcong');
			header('Location: ../site/homeUser.php');
		}

}

?> 