<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['addUser'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$passwordAgain =($_POST['re_password']);
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$role=$_POST['role'];

$sql_adduser = "INSERT INTO `user` VALUES (NULL,'$email','$password','$fullname','$phone','$address',$role)";
		
		//kiem tra email da ton tai
		$sql_getEmail = "SELECT `email` FROM `user` WHERE `email`='$email'";
		$data_email = db_get_row($sql_getEmail);

		if (empty($data_email) && $password == $passwordAgain &&!empty($role) ) {
			//thuc thi dang ki
			db_execute($sql_adduser);

			session_set('addthanhcong', '<div class="alert alert-success">thêm thành công </div>');
			session_delete('addthatbai');
			header('Location: ../site/addUser.php');
		}else{
			session_set('addthatbai', '<div class="alert alert-danger"> thêm thất bại. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('addthanhcong');
			header('Location: ../site/addUser.php');
		}

}

?> 