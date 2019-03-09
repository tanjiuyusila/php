<?php

function myTest() {
    static $x=0;
    echo $x;
//    字符串拼接
    echo "<h1>".$x."</h1>";
    $x++;
}

myTest();
myTest();
myTest();

?>