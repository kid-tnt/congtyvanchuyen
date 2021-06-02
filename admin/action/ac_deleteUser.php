<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['submitDelete'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$passwordAgain =($_POST['re_password']);
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$role=$_POST['role'];

$sql_delete = "DELETE FROM `user`  WHERE `email`='$email'";

		if ($role=='1' ) {
			//thuc thi dang ki
			db_execute($sql_delete);

			session_set('deletethanhcong', '<div class="alert alert-success"Xóa thành công </div>');
			session_delete('deletethatbai');
			header('Location: ../site/showUser.php');
		}else{
			session_set('deletethatbai', '<div class="alert alert-danger"> Lỗi. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('deletethanhcong');
			header('Location: ../site/showUser.php');
		}

}

?> 