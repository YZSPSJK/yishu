function login(){
    var username = val('username');
    var password = val('password');
    if(username==null||username==''){
        tip('用户名不为空');
    }else if(password==null||password==''){
        tip('密码不为空');
    }else{
        document.getElementById('form').submit();
    }
}
function register(){
    var nickname =val('nickname');
    var username =val('username'); 
    var password =val('password');
    var repassword =val('repassword');
    var email = val('email');
    if(nickname==null||nickname==''){
        tip('昵称不为空');
    }else if(username==null||username==''){
        tip('用户名不为空');
    }else if(password==null||password==''){
        tip('密码不为空');
    }else if(repassword==null||repassword==''||repassword!=password){
        tip('密码不一致');
    }else if(email==null||email==''){
        tip('邮箱不为空');
    }else{
        document.getElementById('form').submit(); 
    }
}
function swapin(){
    var bookname=val('bookname');
    var phone=val('phone');
    var description=val('description');
    if(bookname==null||bookname==''){
        tip('书名不为空');
    }else if(phone==null||phone==''){
        tip('联系方式不为空');
    }else if(description==null||description==''){
        tip('喊话不为空');
    }else{
        document.getElementById('form').submit(); 
    }
}
function swapout(){
    var bookname = val('bookname');
    var press =val('press') ;
    var oldprice =val('oldprice') ;
    var newprice =val('newprice') ;;
    var phone=val('phone') ;
    var qq= val('qq');
    var description=val('description');
    if(bookname==null||bookname==''){
        tip('书名不为空');
    }else if(press==null||press==''){
        tip('出版社不为空');
    }else if(oldprice==null||oldprice==''){
        tip('原价不为空');
    }else if(newprice==null||newprice==''){
        tip('现价不为空');
    }else if(phone==null||phone==''){
        tip('手机号码不为空');
    }else if(qq==null||qq==''){
        tip('QQ不为空');
    }else if(description==null||description==''){
       tip('书籍描述不为空'); 
    }else{
        document.getElementById('form').submit();
    }
}



function val(id){
    var result = document.getElementById(id).value;
    return result;
}
function tip(tips){
    document.getElementById('tips').innerHTML="<p style='color:red'>"+tips+"</p>";
}