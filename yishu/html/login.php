<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>登录界面</title>
    </head>
    <script type="text/javascript" src="../js/jump.js"></script>
    <script type="text/javascript" src="../js/check.js"></script>

    <body>
        <?php  
        include("../php/conn.php");//引入链接数据库  
        if(!empty($_POST['username'])){
            $name=$_POST['username'];  
            $pass=$_POST['password'];  
            $sql="select password from user where username = '$name'";  
            $result = mysql_query($sql);
            if($result){
                $password = mysql_fetch_row($result);
                if($pass==$password[0]){
                    echo "<script type='text/javascript'>jump_index();</script>";
                }
            }
        }
        ?> 
        <div id="tips"></div>
        <form id="form" action="login.php" method="post">
            <div>
                用户名:
                <input type="text" placeholder="用户名" id="username" name="username">
                密码:
                <input type="password" placeholder="密码"id="password" name="password">
            </div>
            <div>
                <input type="checkbox">下次自动登录
                <a href="verify.php">登录遇见问题</a>
                <input type="button" value="登录" name="sub" onclick="login()">
                <a href="register.php">立即注册</a>
            </div>
                
        </form>
    </body>
</html>
