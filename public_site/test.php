<?php
    require "../database/database.php" ;    db_connect();
    require "../database/session.php" ; session_start();

    $sql_service="SELECT * FROM `service`WHERE `ID`=1";
    $data_service=db_get_row($sql_service);
   echo $data_service['name'];


   
?>