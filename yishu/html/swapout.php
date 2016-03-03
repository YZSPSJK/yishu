<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script type="text/javascript" src="../js/jump.js"></script>
    <script type="text/javascript" src="../js/check.js"></script>
    <body>
        <?php
            include '../php/conn.php';
            if(!empty($_POST['bookname'])){
                $bookname=$_POST['bookname'];
                $press=$_POST['press'];
                $oldprice=$_POST['oldprice'];
                $newprice=$_POST['newprice'];
                $class=$_POST['class'];
                $phone=$_POST['phone'];
                $qq=$_POST['qq'];
                $description=$_POST['description'];
                $sql="insert into swapout(bookname,press,oldprice,newprice,class,phone,qq,description) "
                        . "value('$bookname','$press','$oldprice','$newprice','$class','$phone','$qq','$description')";
                mysql_query($sql);
                echo "<script type='text/javascript'>jump_exchange();</script>";
            }
        ?>
        <div id="tips"></div>
        <form id="form" action="swapout.php" method="post">
            <div>
                书名<input type="text"id="bookname" name="bookname">
                出版社<input type="text"id="press" name="press">
                原价<input type="text"id="oldprice" name="oldprice">
                现价<input type="text"id="newprice" name="newprice">
                分类<input type="text"name="class">
                图片<input type="button"id="" value="上传图片" >
                手机号码<input type="text"id="phone" name="phone">
                QQ<input type="text"id="qq" name="qq">
                书籍描述<input type="text"id="description" name="description">
            </div>
            <div><input type="button" name="sub"value="发布" onclick="swapout()"></div>
        </form>
    </body>
</html>
