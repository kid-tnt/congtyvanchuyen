<?php 	
	require '../../database/database.php';
	db_connect();
	require '../../database/session.php';
	session_start();
?>
<?php

	if (isset($_POST['submitSigning'])) {
		$email = $_POST['email'];
        $password= ($_POST['password']);
		$passwordAgain =($_POST['re_password']);
        $fullname=$_POST['fullname'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];

		$sql_dangKi = "INSERT INTO `user` VALUES (NULL,'$email','$password','$fullname','$phone','$address',1)";
		
		//kiem tra email da ton tai
		$sql_getEmail = "SELECT `email` FROM `user` WHERE `email`='$email'";
		$data_email = db_get_row($sql_getEmail);

		if (empty($data_email) && $password == $passwordAgain && !empty($password) && !empty($passwordAgain)&& !empty($email)) {
			//thuc thi dang ki
			db_execute($sql_dangKi);

			session_set('dangKiThanhCong', '<div class="alert alert-success">Đăng kí thành công </div>');
			session_delete('dangKiThatBai');
			header('Location: ../../public_site/signup.php');
		}else{
			session_set('dangKiThatBai', '<div class="alert alert-danger"> Đăng kí thất bại. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('dangKiThanhCong');
			header('Location: ../../public_site/signup.php');
		}
	
	}

?>