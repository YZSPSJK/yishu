<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>交换界面</title>
        <link rel="stylesheet" type="text/css" href="../css/exchange.css">
    </head>
    <body>
        <div id="title">
            title部分,包含登录,用用户信息登
        </div>
        <div id="action">
            <input type="button" value="发布区" >
            <input type="button" value="求书区">
            <input type="text" placeholder="查询信息">
            <input type="button" value="搜索">
            <input type="button" value="发布"onclick="jump_swapout()">
            <input type="button" value="求书"onclick="jump_swapin()">
        </div><br>
        <div id="content">
            筛选条件<br>
            可供挑选的已发布交换信息<br>
            <!--显示目前要换出的书籍,排序按照发布时间(或者根据公益值,综合排序)分页显示-->
            <div id="folio">
                <input type="button" value="首页">
                <input type="button" value="上一页">
                <label>1</label>/<label>10</label>
                <input type="button" value="下一页">
                <input type="button" value="尾页">
                <input type="text" placeholder="请输入跳转页数">
                <input type="button" value="跳转">
            </div>
        </div>
        <div id="right">
            版权部分
        </div>
    </body>
    <script type="text/javascript" src="../js/jump.js"></script>
    <script type="text/javascript" src="../js/swap.js"></script>
</html>
