<?php
require "../../database/database.php" ;
db_connect();
require '../../database/session.php'; session_start();
if(empty($_SESSION['id_user'])) {
    header ('Location: ../../index.php');
}
header('location: showUser.php');
?>