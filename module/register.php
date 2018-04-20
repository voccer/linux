<!--     
    <h1>Trang đăng ký thành viên</h1>
    <form action="handle_register.php" method="POST">
        <table cellpadding="0" cellspacing="0" border="1">
            <tr>
                <td>
                    Tên đăng nhập :
                </td>
                <td>
                    <input type="text" name="txtUsername" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    Mật khẩu :
                </td>
                <td>
                    <input type="password" name="txtPassword" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="text" name="txtEmail" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    Họ và tên :
                </td>
                <td>
                    <input type="text" name="txtFullname" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    Ngày sinh :
                </td>
                <td>
                    <input type="text" name="txtBirthday" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    Giới tính :
                </td>
                <td>
                    <select name="txtSex">
                        <option value=""></option>
                        <option value="Nam">Nam</option>
                        <option value="Nu">Nữ</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Đăng ký" />
        <input type="reset" value="Nhập lại" />
    </form> -->

<style>
    .form {
        border: 1px solid goldenrod;
        margin-top: 2%;
        background-color: rgb(243, 226, 129);
        text-align: center;
        min-height: 700px;

    }

    .wrap {
        width: 350px;
        margin: auto;
        background: #a45290;
        margin-top: 50px;
        padding: 10px;
        border-radius: 10px;


    }


    .wrap h1 {
        vertical-align: left;
        font-family: comic sans ms;
        margin-left: 100px;
        margin-top: 10px;
    }

    .wrap form {
        padding: 10px;
        font-family: comic sans ms;
        border: 1px dotted #c4c7aa;
    }

    .wrap h2 {
        text-align: center;
        background: #312344;
        color: #c4c7aa;
        padding: 10px;
        border-radius: 10px;
    }

    .wrap input {
        padding: 10px;
        margin: 5px;
        border-radius: 50px;
        border: none;
    }

    .wrap input[type=text],
    .wrap input[type=email],
    .wrap input[type=number],
    .wrap input[type=password] {
        width: 90%;
    }

    .wrap .submit {
        width: 95%;
        background: #312344;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        color: #c4c7aa;
    }

    .wrap select {
        padding: 10px;
        width: 32%;
        border-radius: 5px;
    }
</style>


<div class="container">
    <div class="form">
        <div class="wrap">

            <h2> Sign Up Free </h2>

            <form action="handle_register.php" method="POST">
                <input type="text" name="txtFullname" placeholder="Your Name" size="20">
                <input type="email" name="txtEmail" placeholder="Your Email">
                </br>

                <input type="text" name="txtMSSV" placeholder="MSSV">

                <input type="password" name="txtPassword" placeholder="Password">
                <input type="password" name="txtRetypePassword" placeholder="Retype Password"> </br>
                <span style="font-size:18px; font-family:comic sans ms"> Date of Birth</span>
                <br>

                <input type="text" name="txtDate" placeholder="Date" style="width: 50px; height: 40px; border-radius: 10%">

                <select name="txtMonth">
                    <option value="January"> January</option>
                    <option value="Febreuary"> Febreuary</option>
                    <option value="March"> March</option>
                    <option value="April"> April</option>
                    <option value="May"> May</option>
                    <option value="June"> June</option>
                    <option value="July"> July</option>
                    <option value="Auguest"> Aguest</option>
                    <option value="September"> December</option>
                    <option value="Octorber"> Octorber</option>
                    <option value="November"> November</option>
                    <option value="December"> December</option>


                </select>

                <select  name="txtYear">
                    <option value="1990"> 1990</option>
                    <option value="1991"> 1991</option>
                    <option value="1992"> 1992</option>
                    <option value="1993"> 1993</option>
                    <option value="1994"> 1994</option>

                    <option value="1995"> 1995</option>

                    <option value="1996"> 1996</option>
                    <option value="1997"> 1997</option>
                    <option value="1998"> 1998</option>
                    <option value="1999"> 1999</option>
                    <option value="2000"> 2000</option>
                    <option value="2001"> 2001</option>
                    <option value="2002"> 2002</option>
                    <option value="2003"> 2003</option>
                    <option value="2004"> 2004</option>
                    <option value="2005"> 2005</option>


                </select>
                <br>
                <br>
                <input type="radio" name="txtMale" value="male"> Male
                <input type="radio" name="txtMale" value="female"> Female
                <br>
                <input type="checkbox" name="txtCheckBox"> I Agree to The Terms of Use
                <br>

                <input type="submit" class="submit" value="submit now">

            </form>


        </div>


    </div>


</div>