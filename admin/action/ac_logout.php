<?php
require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();		
session_destroy();

header("location: ../../public_site/index.php");
?>