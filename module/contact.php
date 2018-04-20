<style type="text/css">
    #contact {
        float: right;
        position: fixed;
        top: 380px;
    }

    #contact ul li {
        list-style-type: none;
    }

    #contact ul li img {
        width: 50px;
        height: 50px;
        vertical-align: middle;
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
    }

    #contact ul li img {
        -webkit-transform: scale(0.9);
        /*Webkit: Thu nhỏ kích thước ảnh còn 0.8 so với ảnh gốc*/
        -moz-transform: scale(0.9);
        /*Thu nhỏ đối với Mozilla*/
        -o-transform: scale(0.9);
        /*Thu nhỏ đối với Opera*/
        -webkit-transition-duration: 0.3s;
        /*Webkit: Thời gian phóng to, nhỏ ảnh*/
        -moz-transition-duration: 0.3s;
        /*Như trên*/
        -o-transition-duration: 0.3s;
        /*Như trên*/
        opacity: 1;
        /*Độ mờ của hình ảnh*/
        margin: 0 10px 5px 0;
        /*căn đều giữa ảnh*/
        transition: all 0.3s 0.2s;
    }

    #contact ul li img:hover {
        -webkit-transform: scale(1.3);
        /*Webkit: Tăng kích cỡ ảnh lên 1.1 lần*/
        -moz-transform: scale(1.3);
        -o-transform: scale(1.3);
        box-shadow: 0px 0px 30px gray;
        /*Đổ bóng bằng CSS3*/
        -webkit-box-shadow: 0px 0px 30px gray;
        -moz-box-shadow: 0px 0px 30px gray;
        opacity: 1;
        /*Độ mờ của hình ảnh*/
        margin-left: 20px;
    }
</style>

<div id="contact">
    <ul>
        <li>
            <a href="http://www.fb.com/ducvoccer" target="_blank" title="Facebook">
                <img src="public/image/facebook.png" alt="" class="imageContact">
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/channel/UCMWrHTC14ztOu50Tcvtuz4A?view_as=subscriber" target="_blank" title="youtube">
                <img src="public/image/youtube.png" alt="" class="imageContact">
            </a>
        </li>
        <li>
            <a href="https://plus.google.com/102939292131381354747" target="_blank" title="Google+">
                <img src="public/image/gmail.jpg" alt="" class="imageContact">
            </a>
        </li>
        <li>
            <a href="http://www.yahoo.com" target="_blank" title="Yahoo">
                <img src="public/image/yahoo.png" alt="" class="imageContact">
            </a>
        </li>
    </ul>
</div>