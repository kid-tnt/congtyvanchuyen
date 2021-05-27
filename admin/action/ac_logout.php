<?php
session_start();
unset($_SESSION['loggedin']);
header("location: ../../public_site/index.php");
?>