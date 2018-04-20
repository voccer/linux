<style type="text/css">
    .form {
        border: 1px solid goldenrod;
        margin-top: 2%;
        background-color: rgb(243, 226, 129);
        text-align: center;
        min-height: 600px;

    }

    .wrap {
        width: 450px;
        margin: auto;
        background: #a45290;
        margin-top: 100px;
        padding: 10px;
        border-radius: 10px;


    }


    .wrap form {
        padding: 10px;
        font-family: comic sans ms;
        border: 1px dotted #c4c7aa;
    }

    .wrap h1 {
        text-align: center;
        
        color: #c4c7aa;
        padding: 10px;
        border-radius: 10px;
        border-bottom: 1px solid rgb(52, 3, 99); 
        margin-bottom: 40px;
    }

    .wrap input {
        padding: 10px;
        margin: 5px;
        border-radius: 50px;
        border: none;
        width: 370px;
    }


    .wrap .submit {
        width: 95%;
        background: #312344;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        color: #c4c7aa;
        margin-top: 40px;
    }

  

</style>

<div class="container">
    <div class="form">
        <div class="wrap">
            <form action="handle_login.php" method='POST'>
                <h1>Member</h1>
                <input type="text" name="txtEmail" placeholder="Your Email" size="20">
                <input type="password" name="txtPassword" placeholder="Your Password" size="20">
            
                <input type="submit" class="submit" value="Log in">
            </form>


        </div>


    </div>


    <!-- <form action='handle_login.php' method='POST'>
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
            </form> -->

</div>