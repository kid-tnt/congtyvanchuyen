
<?php require '../../database/database.php'; db_connect();  
require '../../database/session.php'; session_start();			
?>
<?php
if (isset($_POST['submitLoging'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$sql_user = "SELECT *  FROM `user` WHERE `email`='$email' AND `password`='$password'";
$data_user = db_get_row($sql_user);

if (empty($data_user)) {
    //dang nhap that bai
    session_set('dangNhapThatBai', '<div class="alert alert-danger"> Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại </div>');
    header('location: ../../public_site/login.php');
    
}
if($data_user['role']==true){
    session_set('dangNhapThanhCong', '
            
    <a href="../site/homeadmin.php">
        <span class ="glyphicon glyphicon-user"> '.$data_user['fullname'].'</span>
    </a>
    <a href="../../admin/action/ac_logout.php">Đăng xuất</a>'
);


session_set('id_user', $data_user['id']);

    header('location: ../../user/site/homeUser.php');
}
else {
    //dang nhap thanh cong
    session_set('dangNhapThanhCong', '
            
                <a href="../site/homeadmin.php">
                    <span class ="glyphicon glyphicon-user"> '.$data_user['fullname'].'</span>
                </a>
                <a href="../action/ac_logout.php">Đăng xuất</a>'
            );

    
    session_set('id_user', $data_user['id']);

    header('location: ../site/homeadmin.php');
}


}

?> 
<?php
/*session_start();
if(isset( $_POST['submitLoging']))
{
    if( $_POST['uname']=='admin'&& $_POST['psw']=='123456')
    $_SESSION['loggedin']=true;
    header("location: ../site/homeadmin.php");

        
    
}
*/


?>
