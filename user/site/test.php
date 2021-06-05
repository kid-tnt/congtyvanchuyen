<?php
require '../../database/database.php'; db_connect();  
'../../database/session.php'; session_start();	

echo $_SESSION['id_user'];
?>
