<?php
    $connect['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $connect['dbname'] = 'db_linux'; //Đây là tên của Database
    $connect['username'] = 'root'; //Tên sử dụng Database
    $connect['password'] = '';//Mật khẩu của tên sử dụng Database
    $tbl_name = 'member';

    $con =  @mysqli_connect(
        "{$connect['host']}",
        "{$connect['username']}",
        "{$connect['password']}")
    or
        die("Không thể kết nối database");
    @mysqli_select_db($con, "{$connect['dbname']}")

    or
        die("Không thể chọn database");
?>