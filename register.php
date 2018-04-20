<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="public/css/register.css">
    <title>Trang đăng lý</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        body{
            background: url("public/image/nen.jpg") no-repeat ; /*Không lặp lại hình nền cho nó kéo giãn vừa màn hình*/
            background-attachment: fixed; /*Giữ cho hình nền cố định*/
           -webkit-background-size: cover; /*Kéo giãn phù hợp webkit*/
            -moz-background-size: cover; /*Kéo giãn phù hợp motozila*/
            -o-background-size: cover; /*Kéo giãn phù hợp opera*/
            background-size: cover; /*Kéo giãn phù hợp*/
        }

    </style>
</head>

<body>

    <?php
        include ("module/header.php");
        include ("module/contact.php");
        include ("module/register.php");
        include ("module/footer.php");
    ?>
</body>

</html>