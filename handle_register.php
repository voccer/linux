<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtFullname'])){
        die('');
    }
      
    //Nhúng file kết nối với database
    include('connection.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
    
    
    //Lấy dữ liệu từ file dangky.php
    $fullname   = addslashes($_POST['txtFullname']);
    $password   = addslashes($_POST['txtPassword']);
    $repassword = addslashes($_POST['txtRetypePassword']);
    $email      = addslashes($_POST['txtEmail']);
    $mssv       = addslashes($_POST['txtMSSV']);
    $date       = addslashes($_POST['txtDate']);
    $month      = addslashes($_POST['txtMonth']);
    $year       = addslashes($_POST['txtYear']);

    $sex        = addslashes($_POST['txtMale']);

    $check      = addslashes($_POST['txtCheckBox']);

    $birthday   = $date. "" .$month. "".$year;

    

          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$fullname || !$password || !$email || !$mssv || !$date || !$sex || !$check)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if ($password != $repassword)
    {
        echo "2 Mật khẩu khác nhau";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con, "SELECT email FROM member WHERE email='$email'")) > 0){
        echo "Email này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    /*if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con, "SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    if (!preg_match("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
    {
            echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
    }*/
          
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysqli_query($con, "
        INSERT INTO member (
            fullname,
            password,
            email,
            mssv,
            birthday,
            sex
        )
        VALUE (
            '{$fullname}',
            '{$password}',
            '{$email}',
            '{$mssv}',
            '{$birthday}',
            '{$sex}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='home.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>

