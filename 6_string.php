<?php
//单引双引区别
//都是字符串，但是双引号可以识别变量。如果字符串中没有变量，用单引号更快
$y = "yaozhilin";
echo "my name is $y"."<br>";
echo 'my name is $y'."<br>";

//获取字符串长度
echo strlen("Hello World!")."<br>";
//检索字符串内指定的字符或文本,返回字符串位置，
echo strpos("Hello world!","world");//返回6，（不是7），字符串首字符的位置是0而不是1，如果找不到，返回false