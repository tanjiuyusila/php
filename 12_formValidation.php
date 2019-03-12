<?php
//本页刷新
//放在一个界面，在提交之后才执行，需要超全局变量 $_SERVER['REQUEST_METHOD']：刚已进入页面，浏览器输入是GET方式
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
//表单验证
    if($username == 'admin' && $pwd == '123'){
        echo "登录成功";
    }else{
        echo "用户名或密码错误";//应该在当前页面提示，正常应该使用ajax验证如果不用ajax，就要在一个页面上去做
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--提交到本页面-->
<form action="12_formValidation.php" method="post">
    用户名<input type="text" name="username" ><br/>
    密码<input type="password" name="pwd"><br/>
    <input type="submit" value="登录">
</form>



</body>
</html>

