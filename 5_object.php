<?php
class Car
{
    var $color;
    function Car($color="green") {//构造函数，必须和类名同名，该行括号内的相当于默认值
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}
?>
