<?php
/**
 * Created by PhpStorm.
 * User: 姚之琳
 * Date: 2019/3/9
 * Time: 19:35
 */

class Car
{
    var $color;
    function Car($color="green") {//构造函数，必须和类名同名，该行括号内的相当于默认值
        $this->color = $color;//this指向对象
    }
    function what_color() {
        return $this->color;
    }
}

//调用，
$c = new Car();
echo$c -> what_color();   //获取对象的属性还是方法，都用箭头，理解成指针
$c1 = new Car('red');
echo$c1 -> what_color();