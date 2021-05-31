<?php 	
	require '../database/database.php';
	db_connect();
	require '../database/session.php';
	session_start();
?>
<?php

	if (isset($_POST['contact'])) {
		$name = $_POST['cname'];
        $email= $_POST['cemail'];
		$comment =$_POST['ccomments'];

		$sql_contact = "INSERT INTO `contact` VALUES (NULL,'$name','$email','$comment')";
			db_execute($sql_contact);

			session_set('contact', '<div class="alert alert-success">Phản hồi của bạn đã được ghi lại </div>');
	}
	header('location: index.php');

?>


	

