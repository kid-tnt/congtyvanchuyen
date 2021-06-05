<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['addService'])) {

$name = $_POST['name'];
$description = $_POST['description'];

$sql_addService = "INSERT INTO `service` VALUES (NULL,'$name','$description')";
		
	

		if (!empty($name) &&!empty($description) ) {
			
			db_execute($sql_addService);

			session_set('addServicethanhcong', '<div class="alert alert-success">thêm thành công </div>');
			session_delete('addServicethatbai');
			header('Location: ../site/addService.php');
		}else{
			session_set('addServicethatbai', '<div class="alert alert-danger"> thêm thất bại. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('addServicethanhcong');
			header('Location: ../site/addService.php');
		}

}

?> 