<?php
session_start();
if(isset( $_POST['submitLoging']))
{
    if( $_POST['uname']=='admin'&& $_POST['psw']=='123456')
    $_SESSION['loggedin']=true;
    header("location: ../site/homeadmin.php");

        
    
}



?>
