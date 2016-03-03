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
                $phone=$_POST['phone'];
                $description=$_POST['description'];
                $sql="insert into swapin(bookname,phone,description) "
                        . "value('$bookname','$phone','$description')";
                mysql_query($sql);
                echo "<script type='text/javascript'>jump_exchange();</script>";
            }
            
        ?>
        <div id="tips"></div>
        <form id="form" action="swapin.php" method="post">
            <div>
                书名<input type="text"id="bookname" name="bookname">
                手机号码<input type="text"id="phone" name="phone">
                喊话内容<input type="text"id="description" name="description">
            </div>
            <div><input type="button"value="求书" name="sub" onclick="swapin()"></div>
        </form>
    </body>
</html>
