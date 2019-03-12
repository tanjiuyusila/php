<?php
    $flag = true;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        if($username == 'admin' && $pwd == '123'){
            $flag = false;
        }else{
            $flag = true;
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
    <?php
        if($flag){   //注意大括号写法
    ?>
    <form action="13_formValidation2.php" method="post">
    用户名<input type="text" name="username" ><br/>
    密码<input type="password" name="pwd"><br/>
    <input type="submit" value="登录">
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "用户名或密码错误";
        }
    ?>
    </form>
    <?php }else{   //接应上面的注意大括号写法，将php代码分开，整个页面的php都是同一个作用域
            echo "登录成功";
        }?>



</body>
</html>

