<?php

include ('connection.php');
// username và password được gửi từ form đăng nhập

$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
 
$password = md5($password);

// Xử lý để tránh MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

if ($username == '' || $password == '')
{
    echo("Ban Phai Dien Ten va mat khau");
    exit();
}

$sql= "SELECT * FROM $tbl_name WHERE username = '$username' and password='$password'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
if($count==1){

    header("location:login_success.php");
}
else {
    echo "Sai tên đăng nhập hoặc mật khẩu";
}
?>

