<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Chapter_17_11_fun_changepage</title>
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="https://kit.fontawesome.com/efc0f7b16d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div data-role="content" style="text-align:center;">
            <?php
                if(isset($_GET['send'])&&($_GET['send']!="")){
                    echo "傳送方式為：".$_GET['send'].",值為：".$_GET['sendval'];
                }

                if (isset($_POST['send']) && ($_POST['send'] != "")) {
                    echo "傳送方式為：" . $_POST['send'] . ",值為：" . $_POST['sendval'];
                }
            ?>
        </div> 
    </body>
</html>