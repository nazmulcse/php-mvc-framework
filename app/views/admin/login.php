<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
    <title>SimpleAdmin</title>
    <link rel="stylesheet" type="text/css" href="<?php echo config::site_url();?>public/css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
    <div id="content">
        <div id="main">
            <div class="full_w">
                <?php
                if(array_key_exists('message',$_SESSION) && !empty($_SESSION['message'])) {
                    $message=$_SESSION['message'];
                }
                ?>
                <h4 style="color: red">
                    <?php
                    if(isset($message))
                     echo $message;
                    unset($_SESSION['message']);
                    ?>
                </h4>
                <?php
                if(array_key_exists('message1',$_SESSION) && !empty($_SESSION['message1'])) {
                    $message1=$_SESSION['message1'];
                }
                ?>
                <h4 style="color:blue;">
                    <?php
                    if(isset($message1))
                        echo $message1;
                    unset($_SESSION['message1']);
                    ?>
                </h4>
                <form action="<?php echo config::site_url();?>admin_login/login" method="post">
                    <label for="login">Username:</label>
                    <input id="login" name="login" class="text" />
                    <label for="pass">Password:</label>
                    <input id="pass" name="password" type="password" class="text" />
                    <div class="sep"></div>
                    <button type="submit" class="ok">Login</button> <a class="button" href="">Forgotten password?</a>
                </form>
            </div>
            <div class="footer">&raquo; <a href="">http://yourpage.com</a> | Admin Panel</div>
        </div>
    </div>
</div>

</body>
</html>