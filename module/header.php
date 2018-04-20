<style type="text/css">
    @font-face {
        font-family: font_strong;
        /*a name to be used later*/
        src: url('./public/fonts/VNI5VSTM.TTF');
        /*URL to font*/
    }

    #header {
        margin-top: 3%;
    }

    #header ul li {
        /* display: inline-block; */
        float: left;
        list-style-type: none;
    }



    #slogan {
        font-size: 60px;
        color: blueviolet;
        font-family: font_strong;
        margin-left: 150px;

    }

    #login {

        margin-left: 100px;

    }
</style>

<div class="container">
    <div id="header">
        <ul>
            <li>
                <img src="./public/image/logoBk.png" alt="" width="120px" high="220px">
            </li>

            <li>
                <div id="slogan">
                    <strong> Simple Make Difference</strong>

                </div>

            </li>

            <li>

                <a href="login.php" target="_blank">
                    <button type="button" class="btn btn-default" id="login">Log in</button>
                </a>

                <a href="register.php" target="_blank">
                    <button type="button" class="btn btn-info" id="signin">Sign in</button>
                </a>


            </li>
        </ul>

    </div>


</div>