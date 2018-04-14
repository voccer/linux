<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <form action='handle_login.php' method='POST'>
        <table cellpadding='0' cellspacing='0' border='1'>
            <tr>
                <td>
                    Tên đăng nhập :
                </td>
                <td>
                    <input type='text' name='txtUsername' />
                </td>
            </tr>
            <tr>
                <td>
                    Mật khẩu :
                </td>
                <td>
                    <input type='password' name='txtPassword' />
                </td>
            </tr>
        </table>
        <input type='submit' value='Đăng nhập' />
        <a href='register.php' title='Đăng ký'>Đăng ký</a>
    </form>
</body>

</html>