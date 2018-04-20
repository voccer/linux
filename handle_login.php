<?php

include ('connection.php');
// email và password được gửi từ form đăng nhập

$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];
 
$password = md5($password);

// Xử lý để tránh MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

if ($email == '' || $password == '')
{
    echo("Ban Phai Dien Ten va mat khau");
    exit();
}

$sql= "SELECT * FROM $tbl_name WHERE email = '$email' and password='$password'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
if($count==1){

    header("location:login_success.php");
}
else {
    echo "Sai tên đăng nhập hoặc mật khẩu. Quay lai: <a href='login.php'>Đăng nhập</a>";
}

?>