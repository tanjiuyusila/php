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
<!--action里面的url就是提交到哪-->
    <form action="11_server.php" method="post">
<!--        表单的name属性-->
        用户名<input type="text" name="username" ><br/>
        密码<input type="password" name="pwd"><br/>
        <!--和按钮区别：按钮在表单里有三种行为，默认是提交-->

        <!--通过name来分组，实现单选,传入后台的性别，通过value实现-->
        性别：<input type="radio" name="sex" value="m">男 <input type="radio"  name="sex" value="f">女<br/>
        <!-- 多选框用checkbox来实现，name要加中括号，代表要传的是hoby数组，否则传过去的是字符串-->
        爱好：<input type="checkbox" name="hobby" value="basketball">篮球
        <input type="checkbox"  name="hobby[]" value="soccer">足球
        <input type="checkbox"  name="hobby[]" value="badninton">羽毛球
        <input type="checkbox"  name="hobby[]" value="swim">游泳<br/>
        <!--下拉列表 只能选一个，加上muitiple属性，就能多选了-->
        <select name="language">
            <option value="japanese">日语</option>
            <option value="english">英语</option>
            <option value="chinese">汉语</option>
        </select>
        <select name="school[]" multiple="multiple">
            <option value="ligong">理工</option>
            <option value="linda">林大</option>
            <option value="gongda">工大</option>
        </select>
        <input type="submit" value="登录">
        <!--    <button type="submit">登录</button>-->
    </form>



</body>
</html>

