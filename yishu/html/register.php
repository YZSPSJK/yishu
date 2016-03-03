<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>注册界面</title>
    </head>
    <script type="text/javascript" src="../js/jump.js"></script>
    <script type="text/javascript" src="../js/check.js"></script>
    <body>
        <?php
            include '../php/conn.php';
            if(!empty($_POST['nickname'])){
                $nickname=$_POST['nickname'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $repassword=$_POST['repassword'];
                $email=$_POST['email'];
                $sql = "insert into user(nickname,username,password,email) "
                        . "value('$nickname','$username','$password','$email')";
                mysql_query($sql);
                 echo "<script type='text/javascript'>jump_login();</script>";
            }
        ?>
        <div id="tips"></div>
        <form id="form" action="register.php" method="post">
            <div>
                昵称:<input type="text"id="nickname" name="nickname">
                用户名:<input type="text"id="username" name="username" >
                密码:<input type="password"id="password" name="password">
                重复密码:<input type="password"id="repassword"  name="repassword">
                邮箱:<input type="text"id="email" name="email">
            </div>
            <div> 
                <input type="button" value="注册" name="sub" onclick="register()">
            </div>
        </form>
    </body>
</html>
