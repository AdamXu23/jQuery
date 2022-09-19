<?php
    if(isset($_GET['send'])&&($_GET['send']!="")){
        echo "傳送方式為：".$_GET['send'].",值為：".$_GET['sendval'];
    }
    if (isset($_POST['send']) && ($_POST['send'] != "")) {
        echo "傳送方式為：" . $_POST['send'] . ",值為：" . $_POST['sendval'];
    }
?>