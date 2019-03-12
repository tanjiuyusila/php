<?php
//$username = $_GET['username'];
//$pwd = $_GET['pwd'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
//$sex = $_POST['sex'];
//$h = $_POST['hobby'];
//$l = $_POST['language'];
//$s = $_POST['school'];
//
//var_dump($h);
//var_dump($l);
//var_dump($s);


//echo "您的用户名是：".$username."<br>","您的密码是：".$pwd."<br>","您的性别是：".$sex;

//请求方式：get post put delete head（计算机网络的http协议的请求方式）


//表单验证
if($username == 'admin' && $pwd == '123'){
    echo "登录成功";
}else{
    echo "用户名或密码错误";//应该在当前页面提示，正常应该使用ajax验证如果不用ajax，就要在一个页面上去做
}